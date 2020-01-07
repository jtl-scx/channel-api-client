<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2019-10-30
 */

namespace JTL\SCX\Client\Channel\Api\Category\Response;

use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Model\CategoryTreeVersion;
use JTL\SCX\Client\Response\AbstractResponse;

/**
 * Class UpdateCategoryTreeResponseTest
 * @package JTL\SCX\Client\Channel\Api\Category\Response
 *
 * @covers \JTL\SCX\Client\Channel\Api\Category\Response\UpdateCategoryTreeResponse
 */
class UpdateCategoryTreeResponseTest extends AbstractTestCase
{
    public function testCanBeCreated(): void
    {
        $response = new UpdateCategoryTreeResponse(200, \Mockery::mock(CategoryTreeVersion::class));

        $this->assertInstanceOf(UpdateCategoryTreeResponse::class, $response);
        $this->assertInstanceOf(AbstractResponse::class, $response);
    }

    public function testCanGetVersion(): void
    {
        $categoryTreeVersion = \Mockery::mock(CategoryTreeVersion::class);
        $response = new UpdateCategoryTreeResponse(200, $categoryTreeVersion);

        $this->assertSame($categoryTreeVersion, $response->getCategoryTreeVersion());
    }
}
