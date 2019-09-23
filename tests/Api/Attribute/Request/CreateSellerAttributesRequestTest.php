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
 * Class CreateSellerAttributesRequestTest
 * @package JTL\SCX\Client\Channel\Api\Attribute\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Attribute\Request\CreateSellerAttributesRequest
 */
class CreateSellerAttributesRequestTest extends AbstractTestCase
{
    public function testCanBeCreatedAndValidated(): void
    {
        $attributeList = Mockery::mock(AttributeList::class);
        $sellerId = uniqid('sellerId');
        $attribute = Mockery::mock(Attribute::class);

        $attributeList->shouldReceive('getAttributeList')
            ->once()
            ->andReturn([$attribute]);

        $attribute->shouldReceive('valid')
            ->once()
            ->andReturnTrue();

        $request = new CreateSellerAttributesRequest($sellerId, $attributeList);

        $request->validate();

        $this->assertSame($sellerId, $request->getSellerId());
        $this->assertSame($attributeList, $request->getAttributeList());
    }
}
