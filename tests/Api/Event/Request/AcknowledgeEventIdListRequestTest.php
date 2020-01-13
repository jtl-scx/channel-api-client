<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/7/20
 */

namespace JTL\SCX\Client\Channel\Api\Event\Request;

use JTL\SCX\Client\Channel\Model\EventIdList;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Api\Event\Request\AcknowledgeEventIdListRequest
 */
class AcknowledgeEventIdListRequestTest extends TestCase
{
    public function testCanReceiveRequestModel()
    {
        $request = new AcknowledgeEventIdListRequest(['id1', 'id2']);
        $model = $request->getEventIdListModel();
        $this->assertInstanceOf(EventIdList::class, $model);
        $this->assertSame((string)$model, $request->getBody());
        $this->assertSame('/channel/event', $request->getUrl());
        $this->assertSame('DELETE', $request->getHttpMethod());
    }
}
