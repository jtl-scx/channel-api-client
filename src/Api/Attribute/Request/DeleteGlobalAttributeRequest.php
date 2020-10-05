<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/20
 */

namespace JTL\SCX\Client\Channel\Api\Attribute\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;

class DeleteGlobalAttributeRequest extends AbstractScxApiRequest
{
    private string $attributeId;

    public function __construct(string $attributeId)
    {
        $this->attributeId = $attributeId;
    }

    public function getParams(): array
    {
        return ['attributeId' => $this->attributeId];
    }

    public function getUrl(): string
    {
        return '/v1/channel/attribute/global/{attributeId}';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_DELETE;
    }
}
