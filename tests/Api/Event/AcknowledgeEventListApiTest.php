<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/7/20
 */

namespace JTL\SCX\Client\Channel\Api\Event;

use GuzzleHttp\ClientInterface;
use JTL\SCX\Client\Api\Auth\AuthApi;
use JTL\SCX\Client\Api\Configuration;
use JTL\SCX\Client\Auth\SessionTokenStorage;
use JTL\SCX\Client\Channel\Api\Event\Request\AcknowledgeEventIdListRequest;
use JTL\SCX\Client\Channel\Model\EventIdList;
use JTL\SCX\Client\Request\RequestFactory;
use JTL\SCX\Client\Request\UrlFactory;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class AcknowledgeEventListApiTest
 * @covers \JTL\SCX\Client\Channel\Api\Event\AcknowledgeEventListApi
 */
class AcknowledgeEventListApiTest extends TestCase
{

    /**
     * @var AcknowledgeEventListApi
     */
    private $api;

    public function setUp(): void
    {
        $requestFactoryMock = $this->createMock(RequestFactory::class);
        $requestFactoryMock->expects($this->any())->method('create')
            ->willReturn($this->createMock(RequestInterface::class));

        $clientMock = $this->createMock(ClientInterface::class);
        $clientMock->expects($this->atLeastOnce())->method('send')
            ->willReturn($this->createStub(ResponseInterface::class));

        $this->api = new AcknowledgeEventListApi(
            $this->createStub(Configuration::class),
            $this->createStub(SessionTokenStorage::class),
            $clientMock,
            $this->createStub(AuthApi::class),
            $requestFactoryMock,
            $this->createStub(UrlFactory::class),
        );
    }

    public function testCanAck()
    {
        $request = $this->createMock(AcknowledgeEventIdListRequest::class);
        $request->expects($this->once())->method('validate');
        $request->expects($this->once())->method('getEventIdListModel')
            ->willReturn($this->createStub(EventIdList::class));

        $this->api->ack($request);
    }
}
