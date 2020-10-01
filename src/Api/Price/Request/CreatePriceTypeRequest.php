<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Price\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\PriceType;
use JTL\SCX\Client\Request\ScxApiRequest;

class CreatePriceTypeRequest extends AbstractScxApiRequest
{
    private PriceType $priceType;

    public function __construct(PriceType $priceType)
    {
        $this->priceType = $priceType;
    }

    public function getPriceType(): PriceType
    {
        return $this->priceType;
    }

    public function getUrl(): string
    {
        return '/v1/channel/price';
    }

    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_POST;
    }

    public function getBody(): string
    {
        return (string)$this->getPriceType();
    }
}
