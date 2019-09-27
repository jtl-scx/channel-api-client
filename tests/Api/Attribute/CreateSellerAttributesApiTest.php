<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Attribute;

use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Api\Attribute\Request\CreateSellerAttributesRequest;
use JTL\SCX\Client\Channel\Model\AttributeList;
use Mockery;
use Psr\Http\Message\ResponseInterface;

/**
 * Class CreateSellerAttributesApiTest
 * @package JTL\SCX\Client\Channel\Api\Attribute
 *
 * @covers \JTL\SCX\Client\Channel\Api\Attribute\CreateSellerAttributesApi
 */
class CreateSellerAttributesApiTest extends AbstractTestCase
{
    public function testCreateSellerAttributes(): void
    {
        $response = Mockery::mock(ResponseInterface::class);
        $request = Mockery::mock(CreateSellerAttributesRequest::class);
        $attributeList = Mockery::mock(AttributeList::class);
        $sellerId = uniqid('sellerId', true);

        $body = uniqid('body', true);

        $client = $this->createClientMock($response);
        $configuration = $this->createConfigurationMock();
        $requestFactory = $this->createRequestFactoryMock(AbstractApi::HTTP_METHOD_PUT, $body);
        $urlFactory = $this->createUrlFactoryMock('/channel/attribute/seller/{sellerId}', ['sellerId' => $sellerId]);
        [$tokenStorage, $authApi] = $this->createAuthMocks();

        $request->shouldReceive('validate')->once();

        $request->shouldReceive('getAttributeList')
            ->once()
            ->andReturn($attributeList);

        $request->shouldReceive('getSellerId')
            ->once()
            ->andReturn($sellerId);

        $attributeList->shouldReceive('__toString')
            ->once()
            ->andReturn($body);

        $response->shouldReceive('getStatusCode')
            ->once()
            ->andReturn(200);

        $api = new CreateSellerAttributesApi(
            $configuration,
            $tokenStorage,
            $client,
            $authApi,
            $requestFactory,
            $urlFactory
        );
        $response = $api->createSellerAttributes($request);

        $this->assertEquals(200, $response->getStatusCode());
    }
}
