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

class CreateCategoryAttributesRequest extends AbstractScxApiRequest
{
    /**
     * @var string
     */
    private $categoryId;

    /**
     * @var AttributeList
     */
    private $attributeList;

    /**
     * CreateCategoryAttributesRequest constructor.
     * @param string $categoryId
     * @param AttributeList $attributeList
     */
    public function __construct(string $categoryId, AttributeList $attributeList)
    {
        $this->categoryId = $categoryId;
        $this->attributeList = $attributeList;
    }

    /**
     * @return string
     */
    public function getCategoryId(): string
    {
        return $this->categoryId;
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
