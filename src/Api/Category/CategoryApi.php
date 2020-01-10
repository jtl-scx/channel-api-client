<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/20
 */

namespace JTL\SCX\Client\Channel\Api\Category;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Category\Request\UpdateCategoryTreeRequest;
use JTL\SCX\Client\Channel\Api\Category\Response\UpdateCategoryTreeResponse;
use JTL\SCX\Client\Channel\Model\CategoryTreeVersion;
use JTL\SCX\Client\Exception\RequestFailedException;
use JTL\SCX\Client\Exception\RequestValidationFailedException;
use JTL\SCX\Client\ResponseDeserializer;

class CategoryApi
{
    private AuthAwareApiClient $apiClient;
    private ResponseDeserializer $responseDeserializer;

    public function __construct(AuthAwareApiClient $apiClient, ResponseDeserializer $responseDeserializer)
    {
        $this->apiClient = $apiClient;
        $this->responseDeserializer = $responseDeserializer;
    }
    /**
     * @param UpdateCategoryTreeRequest $request
     * @return UpdateCategoryTreeResponse
     * @throws RequestFailedException
     * @throws RequestValidationFailedException
     * @throws GuzzleException
     */
    public function updateCategoryTree(UpdateCategoryTreeRequest $request): UpdateCategoryTreeResponse
    {
        $response = $this->apiClient->request($request);
        $categoryTreeVersion = $this->responseDeserializer->deserialize($response, CategoryTreeVersion::class);

        return new UpdateCategoryTreeResponse($response->getStatusCode(), $categoryTreeVersion);
    }
}
