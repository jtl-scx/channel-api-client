<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 3/23/20
 */

namespace JTL\SCX\Client\Channel\Api\Notification\Response;

use PHPUnit\Framework\TestCase;

/**
 * Class NotificationResponseTest
 * @covers \JTL\SCX\Client\Channel\Api\Notification\Response\NotificationResponse
 */
class NotificationResponseTest extends TestCase
{
    public function testStatusCode201IsSuccessful()
    {
        $response = new NotificationResponse(201);
        $this->assertTrue($response->isSuccessful());
    }

    public function testOtherStatusCodesAreConsideredAsFailed()
    {
        $response = new NotificationResponse(200);
        $this->assertFalse($response->isSuccessful());
    }
}
