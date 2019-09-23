<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Seller\Request;

use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Model\CreateSeller;
use Mockery;

/**
 * Class CreateSellerRequestTest
 * @package JTL\SCX\Client\Channel\Api\Seller\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Seller\Request\CreateSellerRequest
 */
class CreateSellerRequestTest extends AbstractTestCase
{
    public function testCanBeCreatedAndValidated(): void
    {
        $createSeller = Mockery::mock(CreateSeller::class);
        $createSeller->shouldReceive('valid')
            ->once()
            ->andReturnTrue();

        $request = new CreateSellerRequest($createSeller);
        $request->validate();

        $this->assertSame($createSeller, $request->getCreateSellerModel());
    }
}
