<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/8/20
 */

namespace JTL\SCX\Client\Channel\Api\Offer\Request;


use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\OfferListingInProgress;
use JTL\SCX\Client\Channel\Model\OfferListingInProgressList;
use JTL\SCX\Client\Request\ScxApiRequest;

class MarkListingInProgressRequest extends AbstractScxApiRequest
{
    private OfferListingInProgressList $offerList;

    public function __construct(OfferListingInProgressList $offerList = null)
    {
        if ($offerList === null) {
            $offerList = new OfferListingInProgressList();
        }
        $this->offerList = $offerList;
    }

    public function addOffer(OfferListingInProgress $offer)
    {
        $newOfferList = $this->offerList->getOfferList() ?? [];
        $newOfferList[] = $offer;
        $this->offerList->setOfferList($newOfferList);
    }

    public function getBody(): ?string
    {
        return (string)$this->offerList;
    }

    public function getUrl(): string
    {
        return '/channel/offer/received';
    }

    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_POST;
    }
}
