<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-01-13
 */

namespace JTL\SCX\Client\Channel\Api\Channel\Request;

use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Api\Channel\Request\GetChannelStatusRequest
 */
class GetChannelStatusRequestTest extends TestCase
{

    public function testCanBeCreatedAndUsed()
    {
        $request = new GetChannelStatusRequest();

        $this->assertSame('GET', $request->getHttpMethod());
        $this->assertSame('/channel', $request->getUrl());
    }
}
