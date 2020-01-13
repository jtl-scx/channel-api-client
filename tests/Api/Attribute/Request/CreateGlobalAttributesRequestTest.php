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
        $bodyStr = uniqid('body', true);

        $attrList = $this->createMock(AttributeList::class);
        $attrList->expects($this->once())->method('__toString')->willReturn($bodyStr);

        $request = new CreateGlobalAttributesRequest($attrList);

        $this->assertSame($bodyStr, $request->getBody());
        $this->assertSame('PUT', $request->getHttpMethod());
        $this->assertSame('/channel/attribute/global', $request->getUrl());
    }
}
