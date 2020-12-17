<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-08-17
 */

namespace JTL\SCX\Client\Channel\Api\Meta\Request;

use JTL\SCX\Client\Channel\Model\PaymentRules;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Api\Meta\Request\CreatePaymentRulesRequest
 */
class CreatePaymentRulesRequestTest extends TestCase
{
    public function testCanBeCreatedAndUsed(): void
    {
        $bodyStr =uniqid('body', true);
        $paymentRules = $this->createMock(PaymentRules::class);
        $paymentRules->expects($this->atLeastOnce())->method('__toString')->willReturn($bodyStr);

        $request = new CreatePaymentRulesRequest($paymentRules);
        $this->assertSame($bodyStr, $request->getBody());
        $this->assertSame('PUT', $request->getHttpMethod());
        $this->assertSame('/v1/channel/payment-rules', $request->getUrl());
    }
}
