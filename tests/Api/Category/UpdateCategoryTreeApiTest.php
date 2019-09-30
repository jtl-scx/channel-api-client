<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Category;

use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Api\Category\Request\UpdateCategoryTreeRequest;
use JTL\SCX\Client\Channel\Model\ChannelCategoryTree;
use Mockery;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UpdateCategoryTreeApiTest
 * @package JTL\SCX\Client\Channel\Api\Category
 *
 * @covers \JTL\SCX\Client\Channel\Api\Category\UpdateCategoryTreeApi
 */
class UpdateCategoryTreeApiTest extends AbstractTestCase
{
    public function testUpdate(): void
    {
        $request = Mockery::mock(UpdateCategoryTreeRequest::class);
        $response = Mockery::mock(ResponseInterface::class);
        $categoryTree = Mockery::mock(ChannelCategoryTree::class);
        $body = uniqid('body', true);

        $client = $this->createClientMock($response);
        $configuration = $this->createConfigurationMock();
        $requestFactory = $this->createRequestFactoryMock(AbstractApi::HTTP_METHOD_PUT, $body);
        $urlFactory = $this->createUrlFactoryMock('/channel/categories');
        [$tokenStorage, $authApi] = $this->createAuthMocks();

        $request->shouldReceive('validate')->once();

        $request->shouldReceive('getChannelCategoryTree')
            ->once()
            ->andReturn($categoryTree);

        $categoryTree->shouldReceive('__toString')
            ->once()
            ->andReturn($body);

        $response->shouldReceive('getStatusCode')
            ->once()
            ->andReturn(200);


        $api = new UpdateCategoryTreeApi(
            $configuration,
            $tokenStorage,
            $client,
            $authApi,
            $requestFactory,
            $urlFactory
        );
        $apiResponse = $api->update($request);

        $this->assertSame(200, $apiResponse->getStatusCode());
    }
}
