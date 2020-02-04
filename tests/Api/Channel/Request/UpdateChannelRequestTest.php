<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Channel\Request;

use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Model\ChannelUpdate;

/**
 * Class UpdateChannelRequestTest
 * @package JTL\SCX\Client\Channel\Api\Channel\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Channel\Request\UpdateChannelRequest
 */
class UpdateChannelRequestTest extends AbstractTestCase
{
    public function testCanBeCreatedAndUsed(): void
    {
        $bodyStr = uniqid('body', true);

        $channelUpdateMock = $this->createMock(ChannelUpdate::class);
        $channelUpdateMock->expects($this->once())->method('__toString')->willReturn($bodyStr);

        $request = new UpdateChannelRequest($channelUpdateMock);

        $this->assertSame($bodyStr, $request->getBody());
        $this->assertSame('PATCH', $request->getHttpMethod());
        $this->assertSame('/channel', $request->getUrl());
    }
}
