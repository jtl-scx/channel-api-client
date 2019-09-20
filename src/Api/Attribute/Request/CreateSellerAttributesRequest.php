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
use JTL\SCX\Client\Request\AbstractRequest;

class CreateSellerAttributesRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $sellerId;

    /**
     * @var AttributeList
     */
    private $attributeList;

    /**
     * CreateSellerAttributesRequest constructor.
     * @param string $sellerId
     * @param AttributeList $attributeList
     */
    public function __construct(string $sellerId, AttributeList $attributeList)
    {
        $this->sellerId = $sellerId;
        $this->attributeList = $attributeList;
    }

    /**
     * @return string
     */
    public function getSellerId(): string
    {
        return $this->sellerId;
    }

    /**
     * @return AttributeList
     */
    public function getAttributeList(): AttributeList
    {
        return $this->attributeList;
    }


    /**
     * @throws RequestValidationFailedException
     */
    public function validate(): void
    {
        foreach ($this->attributeList->getAttributeList() as $attribute) {
            $this->validateModel($attribute);
        }
    }
}
