<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Price;

use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Api\Price\Request\CreatePriceTypeRequest;
use JTL\SCX\Client\Channel\Model\PriceType;
use Mockery;
use Psr\Http\Message\ResponseInterface;

/**
 * Class CreatePriceTypeApiTest
 * @package JTL\SCX\Client\Channel\Api\Price
 *
 * @covers \JTL\SCX\Client\Channel\Api\Price\CreatePriceTypeApi
 */
class CreatePriceTypeApiTest extends AbstractTestCase
{
    public function testCreatePriceType(): void
    {
        $response = Mockery::mock(ResponseInterface::class);
        $request = Mockery::mock(CreatePriceTypeRequest::class);
        $priceType = Mockery::mock(PriceType::class);
        $body = uniqid('body', true);


        $request->shouldReceive('validate')
            ->once();

        $request->shouldReceive('getPriceType')
            ->once()
            ->andReturn($priceType);

        $priceType->shouldReceive('__toString')
            ->once()
            ->andReturn($body);

        $response->shouldReceive('getStatusCode')
            ->once()
            ->andReturn(200);
        

        $client = $this->createClientMock($response);
        $configuration = $this->createConfigurationMock();
        $requestFactory = $this->createRequestFactoryMock(AbstractApi::HTTP_METHOD_POST, $body);
        $urlFactory = $this->createUrlFactoryMock('/channel/price');
        [$tokenStorage, $authApi] = $this->createAuthMocks();

        $api = new CreatePriceTypeApi(
            $configuration,
            $tokenStorage,
            $client,
            $authApi,
            $requestFactory,
            $urlFactory
        );

        $apiResponse = $api->create($request);

        $this->assertSame(200, $apiResponse->getStatusCode());
    }
}
