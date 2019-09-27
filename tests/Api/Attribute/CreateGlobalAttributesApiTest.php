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
use JTL\SCX\Client\Channel\Api\Attribute\Request\CreateGlobalAttributesRequest;
use JTL\SCX\Client\Channel\Model\AttributeList;
use Mockery;
use Psr\Http\Message\ResponseInterface;

/**
 * Class CreateGlobalAttributesApiTest
 * @package JTL\SCX\Client\Channel\Api\Attribute
 *
 * @covers \JTL\SCX\Client\Channel\Api\Attribute\CreateGlobalAttributesApi
 */
class CreateGlobalAttributesApiTest extends AbstractTestCase
{
    public function testCreateGlobalAttributes(): void
    {
        $response = Mockery::mock(ResponseInterface::class);
        $request = Mockery::mock(CreateGlobalAttributesRequest::class);
        $attributeList = Mockery::mock(AttributeList::class);
        [$tokenStorage, $authApi] = $this->createAuthMocks();

        $body = uniqid('body', true);

        $client = $this->createClientMock($response);
        $configuration = $this->createConfigurationMock();
        $requestFactory = $this->createRequestFactoryMock(AbstractApi::HTTP_METHOD_PUT, $body);
        $urlFactory = $this->createUrlFactoryMock('/channel/attribute/global');

        $request->shouldReceive('validate')->once();

        $request->shouldReceive('getAttributeList')
            ->once()
            ->andReturn($attributeList);

        $attributeList->shouldReceive('__toString')
            ->once()
            ->andReturn($body);

        $response->shouldReceive('getStatusCode')
            ->once()
            ->andReturn(200);

        $api = new CreateGlobalAttributesApi(
            $configuration,
            $tokenStorage,
            $client,
            $authApi,
            $requestFactory,
            $urlFactory
        );
        $response = $api->createGlobalAttributes($request);

        $this->assertEquals(200, $response->getStatusCode());
    }
}
