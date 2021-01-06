<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/6/21
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\Model\InvoiceMetaData;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Api\Order\Request\UploadInvoiceRequest
 */
class UploadInvoiceRequestTest extends TestCase
{
    /**
     * @test
     */
    public function it_use_correct_url(): void
    {
        $sut = new UploadInvoiceRequest($this->createStub(InvoiceMetaData::class), 'document_data');
        $this->assertEquals('/v1/channel/order/invoice', $sut->getUrl());
    }

    /**
     * @test
     */
    public function it_use_correct_http_method(): void
    {
        $sut = new UploadInvoiceRequest($this->createStub(InvoiceMetaData::class), 'document_data');
        $this->assertEquals(UploadInvoiceRequest::HTTP_METHOD_POST, $sut->getHttpMethod());
    }

    /**
     * @test
     */
    public function it_has_meta_data_and_document_as_multipart_parameters(): void
    {
        $meta = new InvoiceMetaData(['sellerId' => 'a_seller']);
        $sut = new UploadInvoiceRequest($meta, 'document_data');

        $parameters = $sut->buildMultipartBody();

        $this->assertCount(2, $parameters);
        $this->assertEquals('invoice', $parameters[0]->getName());
        $this->assertEquals(json_encode(['sellerId' => 'a_seller'], JSON_PRETTY_PRINT), $parameters[0]->getContent());

        $this->assertEquals('document', $parameters[1]->getName());
        $this->assertEquals('document_data', $parameters[1]->getContent());
    }
}
