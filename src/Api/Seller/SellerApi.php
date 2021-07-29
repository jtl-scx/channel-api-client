<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/18
 */

namespace JTL\SCX\Client\Channel\Api\Seller;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Seller\Request\CreateSellerRequest;
use JTL\SCX\Client\Channel\Api\Seller\Request\UnlinkSellerRequest;
use JTL\SCX\Client\Channel\Api\Seller\Response\CreateSellerResponse;
use JTL\SCX\Client\Channel\Api\Seller\Response\UnlinkSellerResponse;
use JTL\SCX\Client\Exception\RequestFailedException;
use JTL\SCX\Client\Response\AbstractResponse;

class SellerApi
{
    private AuthAwareApiClient $client;

    public function __construct(AuthAwareApiClient $client)
    {
        $this->client = $client;
    }
    /**
     * @param CreateSellerRequest $createSellerRequest
     * @return CreateSellerResponse
     * @throws RequestFailedException
     * @throws GuzzleException
     */
    public function create(CreateSellerRequest $createSellerRequest): CreateSellerResponse
    {
        $response = $this->client->request($createSellerRequest);
        return new CreateSellerResponse($response->getStatusCode());
    }

    /**
     * @param UnlinkSellerRequest $unlinkSellerRequest
     * @return UnlinkSellerResponse
     * @throws GuzzleException
     * @throws RequestFailedException
     */
    public function unlink(UnlinkSellerRequest $unlinkSellerRequest): UnlinkSellerResponse
    {
        $response = $this->client->request($unlinkSellerRequest);
        return new UnlinkSellerResponse($response->getStatusCode());
    }
}
