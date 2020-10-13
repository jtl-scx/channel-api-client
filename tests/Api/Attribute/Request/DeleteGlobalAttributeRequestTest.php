<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Attribute\Request;

use JTL\SCX\Client\Channel\AbstractTestCase;

/**
 * Class DeleteGlobalAttributeRequestTest
 * @package JTL\SCX\Client\Channel\Api\Attribute\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Attribute\Request\DeleteGlobalAttributeRequest
 */
class DeleteGlobalAttributeRequestTest extends AbstractTestCase
{
    public function testCanBeCreatedAndValidated(): void
    {
        $bodyStr = uniqid('body', true);

        $attrId = uniqid('attrId', true);

        $request = new DeleteGlobalAttributeRequest($attrId);

        $this->assertSame(['attributeId' => $attrId], $request->getParams());
        $this->assertSame('DELETE', $request->getHttpMethod());
        $this->assertSame('/v1/channel/attribute/global/{attributeId}', $request->getUrl());
    }
}
