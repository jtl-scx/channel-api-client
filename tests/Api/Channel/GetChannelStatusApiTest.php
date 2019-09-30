<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Channel;

use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Model\ChannelStatus;
use JTL\SCX\Client\Channel\Model\SalesChannelData;
use JTL\SCX\Client\Channel\ObjectSerializer;
use Mockery;
use Psr\Http\Message\ResponseInterface;

/**
 * Class GetChannelStatusApiTest
 * @package JTL\SCX\Client\Channel\Api\Channel
 *
 * @covers \JTL\SCX\Client\Channel\Api\Channel\GetChannelStatusApi
 */
class GetChannelStatusApiTest extends AbstractTestCase
{
    public function testCanGetStatus(): void
    {
        $response = Mockery::mock(ResponseInterface::class);
        $responseBody = uniqid('body', true);

        $response->shouldReceive('getBody->getContents')
            ->once()
            ->andReturn($responseBody);

        $response->shouldReceive('getStatusCode')
            ->once()
            ->andReturn(200);

        $client = $this->createClientMock($response);
        $configuration = $this->createConfigurationMock();
        $requestFactory = $this->createRequestFactoryMock(AbstractApi::HTTP_METHOD_GET);
        $urlFactory = $this->createUrlFactoryMock('/channel');
        $objectSerializer = Mockery::mock('alias:'. ObjectSerializer::class);

        $channelStatus = Mockery::mock(ChannelStatus::class);
        $channel = Mockery::mock(SalesChannelData::class);
        [$tokenStorage, $authApi] = $this->createAuthMocks();

        $objectSerializer->shouldReceive('deserialize')
            ->with($responseBody, ChannelStatus::class)
            ->once()
            ->andReturn($channelStatus);

        $channelStatus->shouldReceive('getChannel')
            ->once()
            ->andReturn($channel);

        $api = new GetChannelStatusApi(
            $configuration,
            $tokenStorage,
            $client,
            $authApi,
            $requestFactory,
            $urlFactory
        );
        $apiResponse = $api->getStatus();

        $this->assertSame(200, $apiResponse->getStatusCode());
        $this->assertSame($channel, $apiResponse->getSalesChannelData());
    }
}
