<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Attribute\Request;

use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Model\Attribute;
use JTL\SCX\Client\Channel\Model\AttributeList;
use Mockery;

/**
 * Class CreateGlobalAttributesRequestTest
 * @package JTL\SCX\Client\Channel\Api\Attribute\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Attribute\Request\CreateGlobalAttributesRequest
 */
class CreateGlobalAttributesRequestTest extends AbstractTestCase
{
    public function testCanBeCreatedAndValidated(): void
    {
        $attributeList = Mockery::mock(AttributeList::class);
        $attribute = Mockery::mock(Attribute::class);

        $attributeList->shouldReceive('getAttributeList')
            ->once()
            ->andReturn([$attribute]);

        $attribute->shouldReceive('valid')
            ->once()
            ->andReturnTrue();

        $request = new CreateGlobalAttributesRequest($attributeList);

        $request->validate();

        $this->assertSame($attributeList, $request->getAttributeList());
    }
}
