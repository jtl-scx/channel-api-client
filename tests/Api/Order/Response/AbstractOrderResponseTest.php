<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-03-06
 */

namespace JTL\SCX\Client\Channel\Api\Order\Response;

use JTL\SCX\Client\Channel\Model\Error;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractOrderResponseTest
 * @package JTL\SCX\Client\Channel\Api\Order\Response
 *
 * @covers \JTL\SCX\Client\Channel\Api\Order\Response\AbstractOrderResponse
 */
class AbstractOrderResponseTest extends TestCase
{
    public function testCanHaveErrors(): void
    {
        $error1 = $this->createMock(Error::class);
        $error1->method('getMessage')->willReturn('Order with Id MyOrderId has errors');
        $error2 = $this->createMock(Error::class);
        $error2->method('getMessage')->willReturn('Order with Id FooBar has errors');
        $errorList = [$error1, $error2];
        $response = new TestResponse(201, $errorList);

        $this->assertTrue($response->hasError());
        $this->assertTrue($response->orderIdHasError('MyOrderId'));
        $this->assertEquals($errorList, $response->getErrorList());
    }

    public function testCanHaveNoErrors(): void
    {
        $response = new TestResponse(201, null);

        $this->assertFalse($response->hasError());
        $this->assertFalse($response->orderIdHasError('MyOrderId'));
        $this->assertEquals(null, $response->getErrorList());
    }

    public function testCanHaveErrorsButNotSpecifiedOne(): void
    {
        $error1 = $this->createMock(Error::class);
        $error1->method('getMessage')->willReturn('Order with Id MyOrderId has errors');
        $error2 = $this->createMock(Error::class);
        $error2->method('getMessage')->willReturn('Order with Id FooBar has errors');
        $errorList = [$error1, $error2];
        $response = new TestResponse(201, $errorList);

        $this->assertTrue($response->hasError());
        $this->assertFalse($response->orderIdHasError('FalseOrderId'));
    }
}

class TestResponse extends AbstractOrderResponse
{
}
