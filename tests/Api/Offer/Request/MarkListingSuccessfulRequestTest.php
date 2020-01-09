<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/9/20
 */

namespace JTL\SCX\Client\Channel\Api\Offer\Request;

use JTL\SCX\Client\Channel\Model\OfferListingSuccessful;
use JTL\SCX\Client\Channel\Model\OfferListingSuccessfulList;
use JTL\SCX\Client\Request\ScxApiRequest;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Api\Offer\Request\MarkListingSuccessfulRequest
 */
class MarkListingSuccessfulRequestTest extends TestCase
{
    public function testCanInitiateWithOfferListModel()
    {
        $model = new OfferListingSuccessfulList(['offerList' => [new OfferListingSuccessful(['offerId' => 'juhu'])]]);
        $request = new MarkListingSuccessfulRequest($model);
        $this->assertJson($request->getBody());
        $this->assertStringContainsString('juhu', $request->getBody());
    }

    public function testCanReadOfferListModel()
    {
        $request = new MarkListingSuccessfulRequest();
        $this->assertJson($request->getBody());
    }

    public function testCanAddOffer()
    {
        $request = new MarkListingSuccessfulRequest();

        $request->addOffer(new OfferListingSuccessful(['offerId' => 'activeOffer1']));
        $request->addOffer(new OfferListingSuccessful(['offerId' => 'activeOffer2']));
        $request->addOffer(new OfferListingSuccessful(['offerId' => 'activeOffer3']));

        $body = $request->getBody();

        $this->assertJson($request->getBody());
        $this->assertStringContainsString('activeOffer1', $body);
        $this->assertStringContainsString('activeOffer2', $body);
        $this->assertStringContainsString('activeOffer3', $body);
    }

    public function testHttpMethodIsCorrect()
    {
        $request = new MarkListingSuccessfulRequest();
        $this->assertEquals(ScxApiRequest::HTTP_METHOD_POST, $request->getHttpMethod());
    }

    public function testEndpointUrlIsCorrect()
    {
        $request = new MarkListingSuccessfulRequest();
        $this->assertEquals('/channel/offer/listed', $request->getUrl());
    }
}
