<?php

namespace JTL\SCX\Client\Channel\Api\Seller\Request;

use JTL\SCX\Client\Channel\Model\CreateSeller;
use PHPUnit\Framework\TestCase;

/**
 * Class UnlinkSellerRequestTest
 * @package JTL\SCX\Client\Channel\Api\Seller\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Seller\Request\UnlinkSellerRequest
 */
class UnlinkSellerRequestTest extends TestCase
{
    public function testCanBeCreatedAndValidated(): void
    {
        $sellerId = uniqid('sellerId', true);

        $request = new UnlinkSellerRequest($sellerId);
        $this->assertSame('/v1/channel/seller/{sellerId}', $request->getUrl());
        $this->assertSame('DELETE', $request->getHttpMethod());
        $this->assertSame(['sellerId' => $sellerId], $request->getParams());
    }
}
