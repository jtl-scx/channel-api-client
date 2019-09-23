<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Price\Request;

use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Model\PriceType;
use Mockery;

/**
 * Class CreatePriceTypeRequestTest
 * @package JTL\SCX\Client\Channel\Api\Price\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Price\Request\CreatePriceTypeRequest
 */
class CreatePriceTypeRequestTest extends AbstractTestCase
{
    public function testCanBeCreatedAndValidated(): void
    {
        $priceType = Mockery::mock(PriceType::class);

        $priceType->shouldReceive('valid')
            ->once()
            ->andReturnTrue();

        $request = new CreatePriceTypeRequest($priceType);
        $request->validate();

        $this->assertSame($priceType, $request->getPriceType());
    }
}
