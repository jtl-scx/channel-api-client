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
use JTL\SCX\Client\Channel\Api\ChannelApiResponseDeserializer;
use JTL\SCX\Client\Channel\Api\Seller\Request\CreateSellerRequest;
use JTL\SCX\Client\Channel\Api\Seller\Request\GetSellerIdFromUpdateSessionRequest;
use JTL\SCX\Client\Channel\Api\Seller\Request\UnlinkSellerRequest;
use JTL\SCX\Client\Channel\Api\Seller\Request\UpdateSellerRequest;
use JTL\SCX\Client\Channel\Api\Seller\Response\CreateSellerResponse;
use JTL\SCX\Client\Channel\Api\Seller\Response\UnlinkSellerResponse;
use JTL\SCX\Client\Channel\Api\Seller\Response\UpdateSellerResponse;
use JTL\SCX\Client\Channel\Api\Seller\Response\UpdateSessionResponse;
use JTL\SCX\Client\Channel\Model\UpdateSeller;
use JTL\SCX\Client\Channel\Model\UpdateSession;
use JTL\SCX\Client\Exception\RequestFailedException;

class SellerApi
{
    private AuthAwareApiClient $client;
    private ChannelApiResponseDeserializer $responseDeserializer;

    public function __construct(AuthAwareApiClient $client, ChannelApiResponseDeserializer $responseDeserializer = null)
    {
        $this->client = $client;
        $this->responseDeserializer = $responseDeserializer ?? new ChannelApiResponseDeserializer();
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
     * @param string $sessionId
     * @return UpdateSession
     * @throws GuzzleException
     * @throws RequestFailedException
     */
    public function getSellerIdFromUpdateSession(string $sessionId): UpdateSessionResponse
    {
        $response = $this->client->request(new GetSellerIdFromUpdateSessionRequest($sessionId));
        /** @var UpdateSession $updateSession */
        $updateSession = $this->responseDeserializer->deserialize($response, UpdateSession::class);
        return new UpdateSessionResponse($updateSession->getSellerId(), $response->getStatusCode());
    }

    /**
     * @param UpdateSeller $updateSeller
     * @return UpdateSellerResponse
     * @throws GuzzleException
     * @throws RequestFailedException
     */
    public function update(UpdateSeller $updateSeller): UpdateSellerResponse
    {
        $response = $this->client->request(new UpdateSellerRequest($updateSeller));
        return new UpdateSellerResponse($response->getStatusCode());
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
