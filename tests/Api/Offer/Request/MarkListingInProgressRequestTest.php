<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/9/20
 */

namespace JTL\SCX\Client\Channel\Api\Offer\Request;

use JTL\SCX\Client\Channel\Model\OfferListingInProgress;
use JTL\SCX\Client\Channel\Model\OfferListingInProgressList;
use JTL\SCX\Client\Request\ScxApiRequest;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Api\Offer\Request\MarkListingInProgressRequest
 */
class MarkListingInProgressRequestTest extends TestCase
{
    public function testCanInitiateWithOfferListModel()
    {
        $model = new OfferListingInProgressList(['offerList' => [new OfferListingInProgress(['offerId' => 'in progress'])]]);
        $request = new MarkListingInProgressRequest($model);
        $this->assertJson($request->getBody());
        $this->assertStringContainsString('in progress', $request->getBody());
    }

    public function testCanReadBody()
    {
        $request = new MarkListingInProgressRequest();
        $this->assertJson($request->getBody());
    }

    public function testCanAddOffer()
    {
        $request = new MarkListingInProgressRequest();

        $request->addOffer(new OfferListingInProgress(['offerId' => 'offerId1']));
        $request->addOffer(new OfferListingInProgress(['offerId' => 'offerId2']));
        $request->addOffer(new OfferListingInProgress(['offerId' => 'offerId3']));

        $body = $request->getBody();

        $this->assertJson($request->getBody());
        $this->assertStringContainsString('offerId1', $body);
        $this->assertStringContainsString('offerId2', $body);
        $this->assertStringContainsString('offerId3', $body);
    }

    public function testHttpMethodIsCorrect()
    {
        $request = new MarkListingInProgressRequest();
        $this->assertEquals(ScxApiRequest::HTTP_METHOD_POST, $request->getHttpMethod());
    }

    public function testEndpointUrlIsCorrect()
    {
        $request = new MarkListingInProgressRequest();
        $this->assertEquals('/v1/channel/offer/in-progress', $request->getUrl());
    }
}
