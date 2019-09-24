<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/20
 */

namespace JTL\SCX\Client\Channel\Api\Attribute\Request;

use JTL\SCX\Client\Request\AbstractRequest;

class DeleteGlobalAttributeRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $attributeId;

    /**
     * DeleteGlobalAttributeRequest constructor.
     * @param string $attributeId
     */
    public function __construct(string $attributeId)
    {
        $this->attributeId = $attributeId;
    }

    /**
     * @return string
     */
    public function getAttributeId(): string
    {
        return $this->attributeId;
    }

    public function validate(): void
    {
    }
}
