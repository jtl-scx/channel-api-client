<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/20
 */

namespace JTL\SCX\Client\Channel\Api\Attribute;

use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\Api\Attribute\Request\CreateCategoryAttributesRequest;
use JTL\SCX\Client\Channel\ApiMockFactory;
use JTL\SCX\Client\Channel\Model\AttributeList;
use Mockery;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * Class CreateCategoryAttributesApiTest
 * @package JTL\SCX\Client\Channel\Api\Attribute
 *
 * @covers \JTL\SCX\Client\Channel\Api\Attribute\CreateCategoryAttributesApi
 */
class CreateCategoryAttributesApiTest extends TestCase
{
    use ApiMockFactory;

    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testCreateCategoryAttributes()
    {
        $response = Mockery::mock(ResponseInterface::class);

        $client = $this->createClientMock($response);
        $configuration = $this->createConfigurationMock();

        $attributeList = Mockery::mock(AttributeList::class);
        $request = Mockery::mock(CreateCategoryAttributesRequest::class);

        $categoryId = uniqid('categoryId', true);
        $statusCode = 200;
        $body = uniqid('body', true);

        $request->shouldReceive('validate')
            ->once();

        $request->shouldReceive('getAttributeList')
            ->once()
            ->andReturn($attributeList);

        $attributeList->shouldReceive('__toString')
            ->once()
            ->andReturn($body);

        $request->shouldReceive('getCategoryId')
            ->once()
            ->andReturn($categoryId);

        $response->shouldReceive('getStatusCode')
            ->once()
            ->andReturn($statusCode);

        $urlFactory = $this->createUrlFactoryMock('/channel/attribute/category/{categoryId}', ['categoryId' => $categoryId]);
        $requestFactory = $this->createRequestFactoryMock(AbstractApi::HTTP_METHOD_PUT, $body);


        $api = new CreateCategoryAttributesApi($client, $configuration, $requestFactory, $urlFactory);

        $response = $api->createCategoryAttributes($request);

        $this->assertSame($statusCode, $response->getStatusCode());
    }
}
