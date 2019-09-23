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
use JTL\SCX\Client\Channel\Api\Attribute\Request\DeleteGlobalAttributeRequest;
use Mockery;
use Psr\Http\Message\ResponseInterface;

/**
 * Class DeleteGlobalAttributeApiTest
 * @package JTL\SCX\Client\Channel\Api\Attribute
 *
 * @covers \JTL\SCX\Client\Channel\Api\Attribute\DeleteGlobalAttributeApi
 */
class DeleteGlobalAttributeApiTest extends AbstractTestCase
{
    public function testDeleteAttribute(): void
    {
        $response = Mockery::mock(ResponseInterface::class);
        $attributeId = uniqid('attributeId', true);
        $request = Mockery::mock(DeleteGlobalAttributeRequest::class);

        $client = $this->createClientMock($response);
        $configuration = $this->createConfigurationMock();
        $requestFactory = $this->createRequestFactoryMock(AbstractApi::HTTP_METHOD_DELETE);
        $urlFactory = $this->createUrlFactoryMock('/channel/attribute/global/{attributeId}', ['attributeId' => $attributeId]);

        $api = new DeleteGlobalAttributeApi($client, $configuration, $requestFactory, $urlFactory);

        $request->shouldReceive('getAttributeId')
            ->once()
            ->andReturn($attributeId);

        $response->shouldReceive('getStatusCode')
            ->once()
            ->andReturn(200);

        $apiResponse = $api->deleteAttribute($request);

        $this->assertSame(200, $apiResponse->getStatusCode());
    }
}
