<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/12/21
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Api\Order\Request\AcceptCancellationRequest
 */
class AcceptCancellationRequestTest extends TestCase
{
    /**
     * @test
     */
    public function it_has_correct_url(): void
    {
        $sut = new AcceptCancellationRequest('', '');
        $this->assertEquals('/v1/channel/order/cancellation-accept', $sut->getUrl());
    }

    /**
     * @test
     */
    public function it_use_correct_http_method(): void
    {
        $sut = new AcceptCancellationRequest('', '');
        $this->assertEquals(DenyCancellationRequest::HTTP_METHOD_PUT, $sut->getHttpMethod());
    }

    /**
     * @test
     */
    public function it_can_render_request_body(): void
    {
        $sut = new AcceptCancellationRequest('A_SELLER', 'A_ID');
        $this->assertEquals(
            json_encode(
                [
                    'sellerId' => 'A_SELLER',
                    'orderCancellationRequestId' => 'A_ID'
                ],
                JSON_PRETTY_PRINT
            ),
            $sut->getBody()
        );
    }
}
