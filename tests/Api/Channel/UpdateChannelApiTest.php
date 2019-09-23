<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Channel;

use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Api\Channel\Request\UpdateChannelRequest;
use JTL\SCX\Client\Channel\Model\ChannelUpdate;
use Mockery;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UpdateChannelApiTest
 * @package JTL\SCX\Client\Channel\Api\Channel
 *
 * @covers \JTL\SCX\Client\Channel\Api\Channel\UpdateChannelApi
 */
class UpdateChannelApiTest extends AbstractTestCase
{
    public function testUpdate(): void
    {
        $request = Mockery::mock(UpdateChannelRequest::class);
        $response = Mockery::mock(ResponseInterface::class);
        $body = uniqid('body', true);
        $channelUpdate = Mockery::mock(ChannelUpdate::class);


        $client = $this->createClientMock($response);
        $configuration = $this->createConfigurationMock();
        $requestFactory = $this->createRequestFactoryMock(AbstractApi::HTTP_METHOD_PATCH, $body);
        $urlFactory = $this->createUrlFactoryMock('/channel');

        $request->shouldReceive('getChannelUpdate')
            ->once()
            ->andReturn($channelUpdate);

        $channelUpdate->shouldReceive('__toString')
            ->once()
            ->andReturn($body);

        $response->shouldReceive('getStatusCode')
            ->once()
            ->andReturn(200);

        $api = new UpdateChannelApi($client, $configuration, $requestFactory, $urlFactory);

        $apiResponse = $api->update($request);

        $this->assertSame(200, $apiResponse->getStatusCode());
    }
}
