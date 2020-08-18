<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-08-17
 */

namespace JTL\SCX\Client\Channel\Api\Meta\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\ShippingRules;
use JTL\SCX\Client\Request\ScxApiRequest;

class CreateShippingRulesRequest extends AbstractScxApiRequest
{
    private ShippingRules $shippingRules;

    public function __construct(ShippingRules $shippingRules)
    {
        $this->shippingRules = $shippingRules;
    }

    public function getShippingRules(): ShippingRules
    {
        return $this->shippingRules;
    }

    public function getUrl(): string
    {
        return '/channel/shipping-rules';
    }

    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_PUT;
    }

    public function getBody(): string
    {
        return (string)$this->getShippingRules();
    }
}
