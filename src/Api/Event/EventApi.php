<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Event;

use DateTimeImmutable;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Event\Model\EventContainer;
use JTL\SCX\Client\Channel\Api\Event\Model\EventContainerList;
use JTL\SCX\Client\Channel\Api\Event\Request\AcknowledgeEventIdListRequest;
use JTL\SCX\Client\Channel\Api\Event\Request\GetEventListRequest;
use JTL\SCX\Client\Channel\Api\Event\Response\GetSellerEventListResponse;
use JTL\SCX\Client\Channel\Model\SellerEventOfferEnd;
use JTL\SCX\Client\Channel\Model\SellerEventOfferNew;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancelled;
use JTL\SCX\Client\Channel\Model\SellerEventOrderConfirmed;
use JTL\SCX\Client\Channel\Model\SellerEventOrderPayment;
use JTL\SCX\Client\Channel\Model\SellerEventOrderShipping;
use JTL\SCX\Client\Channel\Model\SellerEventTest;
use JTL\SCX\Client\Channel\Model\SystemEventNotification;
use JTL\SCX\Client\Exception\RequestFailedException;
use JTL\SCX\Client\JsonSerializer;
use JTL\SCX\Client\ResponseDeserializer;

class EventApi
{
    private JsonSerializer $jsonSerializer;
    private AuthAwareApiClient $client;
    private ResponseDeserializer $responseDeserializer;

    public function __construct(
        AuthAwareApiClient $client,
        JsonSerializer $jsonSerializer,
        ResponseDeserializer $responseDeserializer
    ) {
        $this->client = $client;
        $this->jsonSerializer = $jsonSerializer;
        $this->responseDeserializer = $responseDeserializer;
    }

    /**
     * @return GetSellerEventListResponse
     * @throws RequestFailedException
     * @throws Exception
     * @throws GuzzleException
     */
    public function getEventList(GetEventListRequest $request): GetSellerEventListResponse
    {
        $responseData = $this->client->request($request);
        $data = $this->jsonSerializer->deserialize($responseData->getBody()->getContents(), false);
        $eventList = new EventContainerList();

        foreach ($data->eventList as $event) {
            $eventContainer = new EventContainer(
                $event->id,
                new DateTimeImmutable($event->createdAt),
                $event->type,
                is_array($event->event) ? null : $this->createEventByType($event->type, $event->event)
            );
            $eventList->add($eventContainer);
        }

        return new GetSellerEventListResponse($eventList, $responseData->getStatusCode());
    }

    private function createEventByType(string $type, \stdClass $data)
    {
        switch ($type) {
            case 'System:Notification':
                return $this->responseDeserializer->deserializeObject($data, SystemEventNotification::class);
            case 'System:Test':
                return $this->responseDeserializer->deserializeObject($data, SellerEventTest::class);
            case 'Seller:Order.Confirmed':
                return $this->responseDeserializer->deserializeObject($data, SellerEventOrderConfirmed::class);
            case 'Seller:Order.Shipping':
                return $this->responseDeserializer->deserializeObject($data, SellerEventOrderShipping::class);
            case 'Seller:Order.Payment':
                return $this->responseDeserializer->deserializeObject($data, SellerEventOrderPayment::class);
            case 'Seller:Order.Cancelled':
                return $this->responseDeserializer->deserializeObject($data, SellerEventOrderCancelled::class);
            case 'Seller:Offer.End':
                return $this->responseDeserializer->deserializeObject($data, SellerEventOfferEnd::class);
            case 'Seller:Offer.New':
                return $this->responseDeserializer->deserializeObject($data, SellerEventOfferNew::class);
        }

        return $data;
    }

    /**
     * @param AcknowledgeEventIdListRequest $request
     * @throws GuzzleException
     * @throws RequestFailedException
     */
    public function ack(AcknowledgeEventIdListRequest $request)
    {
        $this->client->request($request);
    }
}
