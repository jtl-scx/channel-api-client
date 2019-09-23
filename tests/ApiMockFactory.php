<?php
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use JTL\SCX\Client\Api\Configuration;
use JTL\SCX\Client\Request\RequestFactory;
use JTL\SCX\Client\Request\UrlFactory;
use Mockery;
use Psr\Http\Message\ResponseInterface;

trait ApiMockFactory
{
    /**
     * @return Configuration|Mockery\LegacyMockInterface|Mockery\MockInterface
     */
    public function createConfigurationMock()
    {
        $host = 'http://localhost';
        $authToken = '123456789';

        $configuration = Mockery::mock(Configuration::class);
        $configuration->shouldReceive('getHost')
            ->once()
            ->andReturn($host);

        $configuration->shouldReceive('getAuthToken')
            ->once()
            ->andReturn($authToken);

        return $configuration;
    }

    /**
     * @param ResponseInterface $response
     * @return ClientInterface|Mockery\LegacyMockInterface|Mockery\MockInterface
     */
    public function createClientMock(ResponseInterface $response)
    {
        $client = Mockery::mock(ClientInterface::class);
        $client->shouldReceive('send')
            ->once()
            ->with(Mockery::type(Request::class))
            ->andReturn($response);

        return $client;
    }

    public function createRequestFactoryMock(string $method, string $body = null)
    {
        $requestFactory = Mockery::mock(RequestFactory::class);
        $request = Mockery::mock(Request::class);

        $requestFactory->shouldReceive('create')
            ->with($method, Mockery::any(), Mockery::any(), $body)
            ->once()
            ->andReturn($request);

        return $requestFactory;
    }

    public function createUrlFactoryMock(string $url, array $params = [])
    {
        $urlFactory = Mockery::mock(UrlFactory::class);

        $urlFactory->shouldReceive('create')
            ->with('http://localhost', $url, $params)
            ->once()
            ->andReturn(uniqid('url', true));

        return $urlFactory;
    }
}
