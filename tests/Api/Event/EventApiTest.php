<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-01-13
 */

namespace JTL\SCX\Client\Channel\Api\Event;

use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Event\Model\EventContainerList;
use JTL\SCX\Client\Channel\Api\Event\Request\AcknowledgeEventIdListRequest;
use JTL\SCX\Client\Channel\Api\Event\Request\GetEventListRequest;
use JTL\SCX\Client\Channel\Model\SellerEventOfferEnd;
use JTL\SCX\Client\Channel\Model\SellerEventOfferNew;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancelled;
use JTL\SCX\Client\Channel\Model\SellerEventOrderConfirmed;
use JTL\SCX\Client\Channel\Model\SellerEventOrderPayment;
use JTL\SCX\Client\Channel\Model\SellerEventOrderShipping;
use JTL\SCX\Client\Channel\Model\SellerEventTest;
use JTL\SCX\Client\Channel\Model\SystemEventNotification;
use JTL\SCX\Client\JsonSerializer;
use JTL\SCX\Client\ResponseDeserializer;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Class EventApiTest
 * @package JTL\SCX\Client\Channel\Api\Event
 *
 * @covers \JTL\SCX\Client\Channel\Api\Event\EventApi
 */
class EventApiTest extends TestCase
{

    /**
     * @dataProvider eventProvider
     */
    public function testCanGetEventList(string $eventType, string $eventClass, bool $isEvent = true)
    {
        $status = 201;
        $eventData = new \stdClass();
        $eventData->id = uniqid('eventId', true);
        $eventData->createdAt = 'now';
        $eventData->type = $eventType;
        $eventData->event = new \stdClass();
        $data = new \stdClass();
        $data->eventList = [
            $eventData
        ];

        $requestMock = $this->createMock(GetEventListRequest::class);

        $jsonContent = uniqid('jsonContent', true);
        $returnBody = $this->createMock(StreamInterface::class);
        $returnBody->expects($this->once())->method('getContents')->willReturn($jsonContent);
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn($status);
        $responseMock->method('getBody')->willReturn($returnBody);

        $eventMock = $this->createMock($eventClass);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);
        $jsonDeserializerMock = $this->createMock(JsonSerializer::class);
        $jsonDeserializerMock->expects($this->once())->method('deserialize')->with($jsonContent)->willReturn($data);
        $serializerMock = $this->createMock(ResponseDeserializer::class);
        $serializerMock->expects($this->exactly($isEvent?1:0))->method('deserializeObject')->with($eventData->event, $eventClass)->willReturn($eventMock);

        $client = new EventApi($apiClientMock, $jsonDeserializerMock, $serializerMock);
        $response = $client->getEventList($requestMock);

        $this->assertSame($status, $response->getStatusCode());
        $eventList = $response->getEventList();
        $this->assertInstanceOf(EventContainerList::class, $eventList);
        $this->assertInstanceOf($eventClass, $eventList[0]->getEvent());
    }

    public function eventProvider(): array
    {
        return [
            ['System:Notification', SystemEventNotification::class],
            ['System:Test', SellerEventTest::class],
            ['Seller:Order.Confirmed', SellerEventOrderConfirmed::class],
            ['Seller:Order.Shipping', SellerEventOrderShipping::class],
            ['Seller:Order.Payment', SellerEventOrderPayment::class],
            ['Seller:Order.Cancelled', SellerEventOrderCancelled::class],
            ['Seller:Offer.End', SellerEventOfferEnd::class],
            ['Seller:Offer.New', SellerEventOfferNew::class],
            ['unknown', \stdClass::class, false],
        ];
    }

    public function testCanAck()
    {
        $requestMock = $this->createMock(AcknowledgeEventIdListRequest::class);
        $responseMock = $this->createMock(ResponseInterface::class);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);
        $jsonDeserializerMock = $this->createMock(JsonSerializer::class);
        $serializerMock = $this->createMock(ResponseDeserializer::class);

        $client = new EventApi($apiClientMock, $jsonDeserializerMock, $serializerMock);
        $client->ack($requestMock);
    }
}
