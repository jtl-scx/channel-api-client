<?php


namespace JTL\SCX\Client\Channel\Api\Seller\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Request\ScxApiRequest;

class UnlinkSellerRequest extends AbstractScxApiRequest
{
    private string $sellerId;

    public function __construct(string $sellerId)
    {
        $this->sellerId = $sellerId;
    }

    public function getUrl(): string
    {
        return '/v1/channel/seller/{sellerId}';
    }

    public function getParams(): array
    {
        return ['sellerId' => $this->sellerId];
    }

    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_DELETE;
    }
}
