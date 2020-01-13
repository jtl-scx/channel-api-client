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
        $bodyStr = uniqid('body', true);
        $sellerId = uniqid('catId', true);

        $attrList = $this->createMock(AttributeList::class);
        $attrList->expects($this->once())->method('__toString')->willReturn($bodyStr);

        $request = new CreateSellerAttributesRequest($sellerId, $attrList);

        $this->assertSame($sellerId, $request->getSellerId());
        $this->assertSame(['sellerId' => $sellerId], $request->getParams());
        $this->assertSame($bodyStr, $request->getBody());
        $this->assertSame('PUT', $request->getHttpMethod());
        $this->assertSame('/channel/attribute/seller/{sellerId}', $request->getUrl());
    }
}
