<div align="center">
  <img src="https://user-images.githubusercontent.com/1415186/75040771-2ed7df80-54b3-11ea-8657-41a0cae9dafc.png">
</div>

# SCX PHP-Channel-API-Client

![Releases](https://img.shields.io/github/v/tag/jtl-scx/channel-api-client)
![Testing](https://github.com/jtl-scx/channel-api-client/workflows/Testing/badge.svg) [![codecov](https://codecov.io/gh/jtl-scx/channel-api-client/branch/master/graph/badge.svg?token=YNFA2ZRK96)](https://codecov.io/gh/jtl-scx/channel-api-client)

SCX Channel-API Client repository for JTL-Sales-Channel-Extension based on PHP. 

[Channel API Documentation](https://scx-sandbox.ui.jtl-software.com/docs/api_channel.html)

## Usage

```php
use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Api\Configuration;
use JTL\SCX\Client\Channel\Api\Attribute\AttributesApi;
use JTL\SCX\Client\Channel\Api\Category\CategoryApi;
use JTL\SCX\Client\Channel\Api\Event\EventApi;
use JTL\SCX\Client\Channel\Api\Notification\NotificationApi;
use JTL\SCX\Client\Channel\Api\Offer\OfferApi;
use JTL\SCX\Client\Channel\Api\Order\OrderApi;
use JTL\SCX\Client\Channel\Api\Price\PriceApi;
use JTL\SCX\Client\Channel\Api\Report\ReportApi;
use JTL\SCX\Client\Channel\Api\Seller\SellerApi;

$configuration = new Configuration(
    Configuration::HOST_PRODUCTION,
    $_ENV['refreshToken']
);

// create a AuthAwareApiClient to handle authentication
$client = new AuthAwareApiClient($configuration);

// read and acknowledge seller events
$eventApi = new EventApi($client);

// manage sellers (create)
$sellerApi = new SellerApi($client);

// manage meta data such as Categories, Attributes or Price
$attributesApi = new AttributesApi($client);
$categoryApi = new CategoryApi($client);
$priceApi = new PriceApi($client);

// manage orders (send new orders, update order status or address information)
$orderApi = new OrderApi($client);

// manage offers (mark in progress, mark as listed, mark as listing failed)
$offerApi = new OfferApi($client);

// Send a notification message back to SCX Channel API.
$notificationApi = new NotificationApi($client);

// Send requested Report back to SCX
$reportingApi = new ReportApi($client);
// Send SELLER_INVENTORY Report
// see tests/Api/Report/Request/SendReportRequestTest.php
```

## Working with Events

Seller events are one of the most important features in SCX-Channel-Api. A Seller Event
is created by a Seller API Implementation, such as JTL-Wawi to request a action by the existing
channel integration.

See `JTL\SCX\Client\Channel\Event\EventType` for a list of existing Events.
  

```php
use JTL\SCX\Client\Channel\Api\Event\EventApi;
use JTL\SCX\Client\Channel\Api\Event\Request\GetEventListRequest;

$eventApi = new EventApi($authAwareApiClient);

// read a bulk of unacknowledged events from SCX Channel Api
$sellerEventList = $eventApi->get();
foreach ($sellerEventList->getEventList() as $eventContainer) {

    // The Id of the event use this id to acknowledge event after processing
    $id = $eventContainer->getId();

    // Datetime when the event was created
    $createdAt = $eventContainer->getCreatedAt();

    // The Event Type
    $type = $eventContainer->getType();

    // The Event itself
    $eventModel = $eventContainer->getEvent();

    // processEvent($eventContainer)

    // finally acknowledge event after processing
    $eventApi->ack(new AcknowledgeEventIdListRequest([$id]));
}
```
