<?php

namespace JTL\SCX\Client\Channel\Api\Seller\Response;

use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Api\Seller\Response\UpdateSellerResponse
 */
class UpdateSellerResponseTest extends TestCase
{
    /**
     * @test
     */
    public function it_consider_http201_as_successful(): void
    {
        $sut = new UpdateSellerResponse(201);
        self::assertTrue($sut->isSuccessful());

        $sut = new UpdateSellerResponse(200);
        self::assertFalse($sut->isSuccessful());
    }
}
