<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-08-17
 */

namespace JTL\SCX\Client\Channel\Api\Meta\Response;

use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Api\Meta\Response\CreatePaymentRulesResponse
 */
class CreatePaymentRulesResponseTest extends TestCase
{

    public function testIsSuccessful(): void
    {
        $response = new CreatePaymentRulesResponse(201);
        $this->assertTrue($response->isSuccessful());
    }

    public function responsCodeProvider(): array
    {
        return [
            [200],
            [202],
            [0],
            [300],
            [random_int(202, 599)],
            [random_int(1, 200)],
        ];
    }

    /**
     * @dataProvider responsCodeProvider
     */
    public function testIsNotSuccessful($responseCode): void
    {
        $response = new CreatePaymentRulesResponse($responseCode);
        $this->assertFalse($response->isSuccessful());
    }
}
