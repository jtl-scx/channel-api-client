<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Event;

use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Model\SellerEventOfferEnd;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancelled;
use JTL\SCX\Client\Channel\Model\SellerEventOrderConfirmed;
use JTL\SCX\Client\Channel\Model\SellerEventOrderPayment;
use JTL\SCX\Client\Channel\Model\SellerEventOrderShipping;
use JTL\SCX\Client\Channel\Model\SellerEventTest;
use JTL\SCX\Client\Channel\Model\SystemEventNotification;
use JTL\SCX\Client\Channel\ObjectSerializer;
use JTL\SCX\Client\JsonSerializer;
use Mockery;
use Psr\Http\Message\ResponseInterface;

/**
 * Class GetSellerEventListApiTest
 * @package JTL\SCX\Client\Channel\Api\Event
 *
 * @covers \JTL\SCX\Client\Channel\Api\Event\GetSellerEventListApi
 * @runInSeparateProcess
 * @preserveGlobalState
 */
class GetSellerEventListApiTest extends AbstractTestCase
{
    /**
     * @var Mockery\LegacyMockInterface|Mockery\MockInterface|ResponseInterface
     */
    private $response;

    /**
     * @var string
     */
    private $responseBody;

    /**
     * @var \GuzzleHttp\ClientInterface|Mockery\LegacyMockInterface|Mockery\MockInterface
     */
    private $client;

    /**
     * @var \JTL\SCX\Client\Api\Configuration|Mockery\LegacyMockInterface|Mockery\MockInterface
     */
    private $configuration;

    /**
     * @var \JTL\SCX\Client\Request\RequestFactory|Mockery\LegacyMockInterface|Mockery\MockInterface
     */
    private $requestFactory;

    /**
     * @var \JTL\SCX\Client\Request\UrlFactory|Mockery\LegacyMockInterface|Mockery\MockInterface
     */
    private $urlFactory;

    /**
     * @var GetSellerEventListApi
     */
    private $api;

    /**
     * @var JsonSerializer|Mockery\LegacyMockInterface|Mockery\MockInterface
     */
    private $jsonSerializer;

    /**
     * @var \stdClass
     */
    private $event;

    /**
     * @var ObjectSerializer|Mockery\LegacyMockInterface|Mockery\MockInterface
     */
    private $objectSerializer;

    public function setUp(): void
    {
        $this->response = Mockery::mock(ResponseInterface::class);
        $this->responseBody = uniqid('body', true);

        $this->response->shouldReceive('getBody->getContents')
            ->once()
            ->andReturn($this->responseBody);

        $this->response->shouldReceive('getStatusCode')
            ->once()
            ->andReturn(200);

        $this->client = $this->createClientMock($this->response);
        $this->configuration = $this->createConfigurationMock();
        $this->requestFactory = $this->createRequestFactoryMock(AbstractApi::HTTP_METHOD_GET);
        $this->urlFactory = $this->createUrlFactoryMock('/channel/event');
        $this->jsonSerializer = Mockery::mock(JsonSerializer::class);
        $this->objectSerializer = Mockery::mock('alias:'. ObjectSerializer::class);

        $this->api = new GetSellerEventListApi(
            $this->client,
            $this->configuration,
            $this->jsonSerializer,
            $this->requestFactory,
            $this->urlFactory
        );

        $this->event = new \stdClass();
        $this->event->id = uniqid('id', true);
        $this->event->createdAt = '2019-09-23T14:58:58+02:00';
        $this->event->event = new \stdClass();
    }

    public function testCanGetSystemEventNotification(): void
    {
        $this->event->type = 'System:Notification';
        $eventMock = Mockery::mock(SystemEventNotification::class);

        $data = new \stdClass();
        $data->eventList = [$this->event];

        $this->jsonSerializer->shouldReceive('deserialize')
            ->with($this->responseBody, false)
            ->once()
            ->andReturn($data);
        
        $this->objectSerializer->shouldReceive('deserialize')
            ->with($this->event->event, SystemEventNotification::class)
            ->once()
            ->andReturn($eventMock);

        $response = $this->api->getEventList();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame($eventMock, $response->getEventList()[0]->getEvent());
    }

    public function testCanGetSellerEventTest(): void
    {
        $this->event->type = 'System:Test';
        $eventMock = Mockery::mock(SellerEventTest::class);

        $data = new \stdClass();
        $data->eventList = [$this->event];

        $this->jsonSerializer->shouldReceive('deserialize')
            ->with($this->responseBody, false)
            ->once()
            ->andReturn($data);

        $this->objectSerializer->shouldReceive('deserialize')
            ->with($this->event->event, SellerEventTest::class)
            ->once()
            ->andReturn($eventMock);

        $response = $this->api->getEventList();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame($eventMock, $response->getEventList()[0]->getEvent());
    }

    public function testCanGetSellerEventOrderConfirmed(): void
    {
        $this->event->type = 'Seller:Order.Confirmed';
        $eventMock = Mockery::mock(SellerEventOrderConfirmed::class);

        $data = new \stdClass();
        $data->eventList = [$this->event];

        $this->jsonSerializer->shouldReceive('deserialize')
            ->with($this->responseBody, false)
            ->once()
            ->andReturn($data);

        $this->objectSerializer->shouldReceive('deserialize')
            ->with($this->event->event, SellerEventOrderConfirmed::class)
            ->once()
            ->andReturn($eventMock);

        $response = $this->api->getEventList();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame($eventMock, $response->getEventList()[0]->getEvent());
    }

    public function testCanGetSellerEventOrderShipping(): void
    {
        $this->event->type = 'Seller:Order.Shipping';
        $eventMock = Mockery::mock(SellerEventOrderShipping::class);

        $data = new \stdClass();
        $data->eventList = [$this->event];

        $this->jsonSerializer->shouldReceive('deserialize')
            ->with($this->responseBody, false)
            ->once()
            ->andReturn($data);

        $this->objectSerializer->shouldReceive('deserialize')
            ->with($this->event->event, SellerEventOrderShipping::class)
            ->once()
            ->andReturn($eventMock);

        $response = $this->api->getEventList();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame($eventMock, $response->getEventList()[0]->getEvent());
    }

    public function testCanGetSellerEventOrderPayment(): void
    {
        $this->event->type = 'Seller:Order.Payment';
        $eventMock = Mockery::mock(SellerEventOrderPayment::class);

        $data = new \stdClass();
        $data->eventList = [$this->event];

        $this->jsonSerializer->shouldReceive('deserialize')
            ->with($this->responseBody, false)
            ->once()
            ->andReturn($data);

        $this->objectSerializer->shouldReceive('deserialize')
            ->with($this->event->event, SellerEventOrderPayment::class)
            ->once()
            ->andReturn($eventMock);

        $response = $this->api->getEventList();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame($eventMock, $response->getEventList()[0]->getEvent());
    }

    public function testCanGetSellerEventOrderCancelled(): void
    {
        $this->event->type = 'Seller:Order.Cancelled';
        $eventMock = Mockery::mock(SellerEventOrderCancelled::class);

        $data = new \stdClass();
        $data->eventList = [$this->event];

        $this->jsonSerializer->shouldReceive('deserialize')
            ->with($this->responseBody, false)
            ->once()
            ->andReturn($data);

        $this->objectSerializer->shouldReceive('deserialize')
            ->with($this->event->event, SellerEventOrderCancelled::class)
            ->once()
            ->andReturn($eventMock);

        $response = $this->api->getEventList();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame($eventMock, $response->getEventList()[0]->getEvent());
    }

    public function testCanGetSellerEventOfferEnd(): void
    {
        $this->event->type = 'Seller:Offer.End';
        $eventMock = Mockery::mock(SellerEventOfferEnd::class);

        $data = new \stdClass();
        $data->eventList = [$this->event];

        $this->jsonSerializer->shouldReceive('deserialize')
            ->with($this->responseBody, false)
            ->once()
            ->andReturn($data);

        $this->objectSerializer->shouldReceive('deserialize')
            ->with($this->event->event, SellerEventOfferEnd::class)
            ->once()
            ->andReturn($eventMock);

        $response = $this->api->getEventList();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame($eventMock, $response->getEventList()[0]->getEvent());
    }
}
