<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/20
 */

namespace JTL\SCX\Client\Channel\Api\Attribute\Request;

use JTL\SCX\Client\Channel\Model\AttributeList;
use JTL\SCX\Client\Exception\RequestValidationFailedException;
use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;

class CreateSellerAttributesRequest extends AbstractScxApiRequest
{
    private string $sellerId;

    private AttributeList $attributeList;

    public function __construct(string $sellerId, AttributeList $attributeList)
    {
        $this->sellerId = $sellerId;
        $this->attributeList = $attributeList;
    }

    public function getSellerId(): string
    {
        return $this->sellerId;
    }

    public function getParams(): array
    {
        return ['sellerId' => $this->sellerId];
    }

    public function getBody(): ?string
    {
        return (string)$this->attributeList;
    }

    public function getUrl(): string
    {
        return '/channel/attribute/seller/{sellerId}';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PUT;
    }
}
