<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Seller\Request;

use PHPUnit\Framework\TestCase;
use JTL\SCX\Client\Channel\Model\CreateSeller;

/**
 * Class CreateSellerRequestTest
 * @package JTL\SCX\Client\Channel\Api\Seller\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Seller\Request\CreateSellerRequest
 */
class CreateSellerRequestTest extends TestCase
{
    public function testCanBeCreatedAndValidated(): void
    {
        $bodyStr = uniqid('body', true);
        $createSellerMock = $this->createMock(CreateSeller::class);
        $createSellerMock->expects($this->atLeastOnce())->method('__toString')->willReturn($bodyStr);

        $request = new CreateSellerRequest($createSellerMock);
        $this->assertSame($bodyStr, $request->getBody());
        $this->assertSame('/v1/channel/seller', $request->getUrl());
        $this->assertSame('POST', $request->getHttpMethod());
    }
}
