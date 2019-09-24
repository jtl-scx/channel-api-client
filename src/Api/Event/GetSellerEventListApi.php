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
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Api\Configuration;
use JTL\SCX\Client\Channel\Api\Event\Model\EventContainer;
use JTL\SCX\Client\Channel\Api\Event\Response\GetSellerEventListResponse;
use JTL\SCX\Client\Channel\Model\SellerEventOfferEnd;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancelled;
use JTL\SCX\Client\Channel\Model\SellerEventOrderConfirmed;
use JTL\SCX\Client\Channel\Model\SellerEventOrderPayment;
use JTL\SCX\Client\Channel\Model\SellerEventOrderShipping;
use JTL\SCX\Client\Channel\Model\SellerEventTest;
use JTL\SCX\Client\Channel\Model\SystemEventNotification;
use JTL\SCX\Client\Channel\ObjectSerializer;
use JTL\SCX\Client\Exception\RequestFailedException;
use JTL\SCX\Client\JsonSerializer;
use JTL\SCX\Client\Request\RequestFactory;
use JTL\SCX\Client\Request\UrlFactory;

class GetSellerEventListApi extends AbstractApi
{
    /**
     * @var JsonSerializer
     */
    private $jsonSerializer;

    /**
     * GetSellerEventListApi constructor.
     * @param ClientInterface $client
     * @param Configuration $configuration
     * @param RequestFactory|null $requestFactory
     * @param UrlFactory|null $urlFactory
     * @param JsonSerializer $jsonSerializer
     */
    public function __construct(
        ClientInterface $client,
        Configuration $configuration,
        JsonSerializer $jsonSerializer = null,
        RequestFactory $requestFactory = null,
        UrlFactory $urlFactory = null
    ) {
        parent::__construct($client, $configuration, $requestFactory, $urlFactory);
        $this->jsonSerializer = $jsonSerializer ?? new JsonSerializer();
    }

    /**
     * @return GetSellerEventListResponse
     * @throws RequestFailedException
     * @throws Exception
     * @throws GuzzleException
     */
    public function getEventList(): GetSellerEventListResponse
    {
        $responseData = $this->request();
        $data = $this->jsonSerializer->deserialize($responseData->getBody()->getContents(), false);

        $eventList = [];

        foreach ($data->eventList as $event) {
            $eventContainer = new EventContainer(
                $event->id,
                new DateTimeImmutable($event->createdAt),
                $event->type,
                $this->createEventByType($event->type, $event->event)
            );
            $eventList[] = $eventContainer;
        }

        return new GetSellerEventListResponse($eventList, $responseData->getStatusCode());
    }

    /**
     * @param string $type
     * @param \stdClass $data
     * @return mixed
     */
    private function createEventByType(string $type, \stdClass $data)
    {
        switch ($type) {
            case 'System:Notification':
                return ObjectSerializer::deserialize($data, SystemEventNotification::class);
            case 'System:Test':
                return ObjectSerializer::deserialize($data, SellerEventTest::class);
            case 'Seller:Order.Confirmed':
                return ObjectSerializer::deserialize($data, SellerEventOrderConfirmed::class);
            case 'Seller:Order.Shipping':
                return ObjectSerializer::deserialize($data, SellerEventOrderShipping::class);
            case 'Seller:Order.Payment':
                return ObjectSerializer::deserialize($data, SellerEventOrderPayment::class);
            case 'Seller:Order.Cancelled':
                return ObjectSerializer::deserialize($data, SellerEventOrderCancelled::class);
            case 'Seller:Offer.End':
                return ObjectSerializer::deserialize($data, SellerEventOfferEnd::class);
        }

        return $data;
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return '/channel/event';
    }

    /**
     * @return string
     */
    protected function getHttpMethod(): string
    {
        return AbstractApi::HTTP_METHOD_GET;
    }
}
