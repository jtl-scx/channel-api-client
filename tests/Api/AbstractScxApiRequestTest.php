<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-01-13
 */

namespace JTL\SCX\Client\Channel\Api;

use PHPUnit\Framework\TestCase;

/**
 * Class AbstractScxApiRequestTest
 * @package JTL\SCX\Client\Channel\Api
 *
 * @covers \JTL\SCX\Client\Channel\Api\AbstractScxApiRequest
 */
class AbstractScxApiRequestTest extends TestCase
{
    public function testHasDefaults(): void
    {
        $request = new TestRequest();
        $this->assertSame('application/json', $request->getContentType());
        $this->assertSame([], $request->getAdditionalHeaders());
        $this->assertSame([], $request->getParams());
        $this->assertSame('', $request->getBody());
    }
}

class TestRequest extends AbstractScxApiRequest
{
    public function getUrl(): string
    {
        return '';
    }

    public function getHttpMethod(): string
    {
        return '';
    }
}
