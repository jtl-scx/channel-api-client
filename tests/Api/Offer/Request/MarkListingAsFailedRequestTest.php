<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/9/20
 */

namespace JTL\SCX\Client\Channel\Api\Offer\Request;

use JTL\SCX\Client\Channel\Model\OfferListingFailed;
use JTL\SCX\Client\Channel\Model\OfferListingFailedList;
use JTL\SCX\Client\Request\ScxApiRequest;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Api\Offer\Request\MarkListingAsFailedRequest
 */
class MarkListingAsFailedRequestTest extends TestCase
{
    public function testCanInitiateWithOfferListModel()
    {
        $model = new OfferListingFailedList(['offerList' => [new OfferListingFailed(['offerId' => 'failedOffer'])]]);
        $request = new MarkListingAsFailedRequest($model);
        $this->assertJson($request->getBody());
        $this->assertStringContainsString('failedOffer', $request->getBody());
    }

    public function testCanReadOfferListModel()
    {
        $request = new MarkListingAsFailedRequest();
        $this->assertJson($request->getBody());
    }

    public function testCanAddOffer()
    {
        $request = new MarkListingAsFailedRequest();

        $request->addOffer(new OfferListingFailed(['offerId' => 'failedOffer1']));
        $request->addOffer(new OfferListingFailed(['offerId' => 'failedOffer2']));
        $request->addOffer(new OfferListingFailed(['offerId' => 'failedOffer3']));

        $body = $request->getBody();

        $this->assertJson($request->getBody());
        $this->assertStringContainsString('failedOffer1', $body);
        $this->assertStringContainsString('failedOffer2', $body);
        $this->assertStringContainsString('failedOffer3', $body);
    }

    public function testHttpMethodIsCorrect()
    {
        $request = new MarkListingAsFailedRequest();
        $this->assertEquals(ScxApiRequest::HTTP_METHOD_POST, $request->getHttpMethod());
    }

    public function testEndpointUrlIsCorrect()
    {
        $request = new MarkListingAsFailedRequest();
        $this->assertEquals('/channel/offer/listing-failed', $request->getUrl());
    }
}
