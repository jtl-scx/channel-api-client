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

class CreateGlobalAttributesRequest extends AbstractRequest
{
    /**
     * @var AttributeList
     */
    private $attributeList;

    /**
     * CreateGlobalAttributesRequest constructor.
     * @param AttributeList $attributeList
     */
    public function __construct(AttributeList $attributeList)
    {
        $this->attributeList = $attributeList;
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
