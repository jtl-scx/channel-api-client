<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/9/20
 */

namespace JTL\SCX\Client\Channel\Api\Offer;

use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Offer\Request\MarkListingAsFailedRequest;
use JTL\SCX\Client\Channel\Api\Offer\Request\MarkListingInProgressRequest;
use JTL\SCX\Client\Channel\Api\Offer\Request\MarkListingSuccessfulRequest;
use PHPUnit\Framework\TestCase;

class OfferApiTest extends TestCase
{

    public function testCanMarkInProgress()
    {
        $requestMock = $this->createMock(MarkListingInProgressRequest::class);
        $apiClientMock= $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock);

        $api = new OfferApi($apiClientMock);
        $api->markInProgress($requestMock);

    }

    public function testMarkListingFailed()
    {
        $requestMock = $this->createMock(MarkListingAsFailedRequest::class);
        $apiClientMock= $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock);

        $api = new OfferApi($apiClientMock);
        $api->markListingFailed($requestMock);
    }

    public function testMarkListed()
    {
        $requestMock = $this->createMock(MarkListingSuccessfulRequest::class);
        $apiClientMock= $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock);

        $api = new OfferApi($apiClientMock);
        $api->markListed($requestMock);
    }
}
