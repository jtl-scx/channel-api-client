<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Seller;

use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Api\Seller\Request\CreateSellerRequest;
use JTL\SCX\Client\Channel\Model\CreateSeller;
use Mockery;
use Psr\Http\Message\ResponseInterface;

/**
 * Class CreateSellerApiTest
 * @package JTL\SCX\Client\Channel\Api\Seller
 *
 * @covers \JTL\SCX\Client\Channel\Api\Seller\CreateSellerApi
 */
class CreateSellerApiTest extends AbstractTestCase
{
    public function testCreateSeller(): void
    {
        $response = Mockery::mock(ResponseInterface::class);
        $request = Mockery::mock(CreateSellerRequest::class);
        $createSellerModel = Mockery::mock(CreateSeller::class);
        $body = uniqid('body', true);

        $request->shouldReceive('getCreateSellerModel')
            ->once()
            ->andReturn($createSellerModel);

        $createSellerModel->shouldReceive('__toString')
            ->once()
            ->andReturn($body);

        $client = $this->createClientMock($response);
        $configuration = $this->createConfigurationMock();
        $requestFactory = $this->createRequestFactoryMock(AbstractApi::HTTP_METHOD_POST, $body);
        $urlFactory = $this->createUrlFactoryMock('/channel/seller');
        [$tokenStorage, $authApi] = $this->createAuthMocks();

        $response->shouldReceive('getStatusCode')
            ->once()
            ->andReturn(200);

        $api = new CreateSellerApi(
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
