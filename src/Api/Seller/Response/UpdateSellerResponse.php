<?php declare(strict_types=1);

namespace JTL\SCX\Client\Channel\Api\Seller\Response;

use JTL\SCX\Client\Response\AbstractResponse;

class UpdateSellerResponse extends AbstractResponse
{
    public function isSuccessful(): bool
    {
        return $this->getStatusCode() === 201;
    }
}
