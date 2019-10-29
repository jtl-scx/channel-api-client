<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: mbrandt
 * Date: 9/27/19
 */

namespace JTL\SCX\Client\Channel\Api\Channel\Response;

use JTL\SCX\Client\Channel\Model\SalesChannelData;
use Mockery;
use PHPUnit\Framework\TestCase;

/**
 * Class GetChannelStatusResponseTest
 * @package JTL\SCX\Client\Channel\Api\Channel\Response
 *
 * @covers \JTL\SCX\Client\Channel\Api\Channel\Response\GetChannelStatusResponse
 */
class GetChannelStatusResponseTest extends TestCase
{
    public function tearDown(): void
    {
        \Mockery::close();
    }

    public function testCanGetData(): void
    {
        $salesChannelData = Mockery::mock(SalesChannelData::class);
        $statusCode = random_int(1, 1000);

        $response = new GetChannelStatusResponse($salesChannelData, $statusCode);

        $this->assertEquals($salesChannelData, $response->getSalesChannelData());
        $this->assertEquals($statusCode, $response->getStatusCode());
    }
}
