<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Attribute\Request;

use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Model\AttributeList;

/**
 * Class CreateCategoryAttributesRequestTest
 * @package JTL\SCX\Client\Channel\Api\Attribute\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Attribute\Request\CreateCategoryAttributesRequest
 */
class CreateCategoryAttributesRequestTest extends AbstractTestCase
{
    public function testCanBeCreatedAndValidated(): void
    {
        $bodyStr = uniqid('body', true);
        $categoryId = uniqid('catId', true);

        $attrList = $this->createMock(AttributeList::class);
        $attrList->expects($this->once())->method('__toString')->willReturn($bodyStr);

        $request = new CreateCategoryAttributesRequest($categoryId, $attrList);

        $this->assertSame(['categoryId' => $categoryId], $request->getParams());
        $this->assertSame($bodyStr, $request->getBody());
        $this->assertSame('PUT', $request->getHttpMethod());
        $this->assertSame('/channel/attribute/category/{categoryId}', $request->getUrl());
    }
}
