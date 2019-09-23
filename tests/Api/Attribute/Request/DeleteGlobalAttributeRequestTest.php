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
        $attributeId = uniqid('attributeId', true);

        $request = new DeleteGlobalAttributeRequest($attributeId);

        $this->assertSame($attributeId, $request->getAttributeId());
        $request->validate();
    }
}
