<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2020/04/27
 */

namespace JTL\SCX\Client\Channel\Api\Report\Request;

use JTL\SCX\Client\Channel\Model\SellerInventoryItem;
use PHPUnit\Framework\TestCase;

/**
 * Class SendReportRequestTest
 * @package JTL\SCX\Client\Channel\Api\Report\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Report\Request\SendReportRequest
 */
class SendReportRequestTest extends TestCase
{
    public function testCanBeCreatedAndUsed(): void
    {
        $sellerInventoryItem = new SellerInventoryItem([
            'offerId' => 123,
            'sku' => '123',
            'quantity' => '1',
        ]);
        $reportId = uniqid('reportId', true);

        $request = new SendReportRequest($reportId, [$sellerInventoryItem], false);
        $this->assertSame('[{"offerId":123,"sku":"123","quantity":"1"}]', $request->getBody());
        $this->assertSame('POST', $request->getHttpMethod());
        $this->assertSame('/channel/report/{reportId}', $request->getUrl());
        $this->assertSame(['reportId' => $reportId], $request->getParams());
    }
}
