<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Event;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\ApiResponseDeserializer;
use JTL\SCX\Client\Channel\Api\Event\Model\EventContainer;
use JTL\SCX\Client\Channel\Api\Event\Model\EventContainerList;
use JTL\SCX\Client\Channel\Api\Event\Request\AcknowledgeEventIdListRequest;
use JTL\SCX\Client\Channel\Api\Event\Request\GetEventListRequest;
use JTL\SCX\Client\Channel\Api\Event\Response\AcknowledgeEventIdListResponse;
use JTL\SCX\Client\Channel\Api\Event\Response\GetSellerEventListResponse;
use JTL\SCX\Client\Channel\Event\EventType;
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
        JsonSerializer $jsonSerializer = null,
        ResponseDeserializer $responseDeserializer = null
    ) {
        $this->client = $client;
        $this->jsonSerializer = $jsonSerializer ?? new JsonSerializer();
        $this->responseDeserializer = $responseDeserializer ?? new ApiResponseDeserializer();
    }

    /**
     * @param GetEventListRequest|null $request
     * @return GetSellerEventListResponse
     * @throws GuzzleException
     * @throws RequestFailedException
     */
    public function get(GetEventListRequest $request = null): GetSellerEventListResponse
    {
        $responseData = $this->client->request($request ?? new GetEventListRequest());
        $data = $this->jsonSerializer->deserialize($responseData->getBody()->getContents(), false);
        $eventList = new EventContainerList();

        foreach ($data->eventList as $event) {
            $eventType = new EventType($event->type);

            $eventContainer = new EventContainer(
                $event->id,
                new \DateTimeImmutable($event->createdAt),
                $eventType,
                is_array($event->event) ? null : $this->createEventByType($eventType, $event->event)
            );

            $eventList->add($eventContainer);
        }

        return new GetSellerEventListResponse($eventList, $responseData->getStatusCode());
    }

    /**
     * @param AcknowledgeEventIdListRequest $request
     * @return AcknowledgeEventIdListResponse
     * @throws GuzzleException
     * @throws RequestFailedException
     */
    public function ack(AcknowledgeEventIdListRequest $request): AcknowledgeEventIdListResponse
    {
        $response = $this->client->request($request);
        return new AcknowledgeEventIdListResponse($response->getStatusCode());
    }

    private function createEventByType(EventType $type, \stdClass $data): object
    {
        if ($type->isUnknownEventType()) {
            return $data;
        }
        return $this->responseDeserializer->deserializeObject($data, $type->getEventModelClass());
    }
}
