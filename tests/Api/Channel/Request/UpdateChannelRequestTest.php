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
use Mockery;

/**
 * Class UpdateChannelRequestTest
 * @package JTL\SCX\Client\Channel\Api\Channel\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Channel\Request\UpdateChannelRequest
 */
class UpdateChannelRequestTest extends AbstractTestCase
{
    public function testCanBeCreatedAndValidated(): void
    {
        $channelUpdate = Mockery::mock(ChannelUpdate::class);

        $request = new UpdateChannelRequest($channelUpdate);

        $channelUpdate->shouldReceive('valid')
            ->once()
            ->andReturnTrue();

        $request->validate();
        $this->assertSame($channelUpdate, $request->getChannelUpdate());
    }
}
