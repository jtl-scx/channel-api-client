<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/20
 */

namespace JTL\SCX\Client\Channel\Api\Attribute;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Api\AbstractAuthAwareApi;
use JTL\SCX\Client\Channel\Api\Attribute\Request\CreateSellerAttributesRequest;
use JTL\SCX\Client\Channel\Api\Attribute\Response\CreateSellerAttributesResponse;
use JTL\SCX\Client\Exception\RequestFailedException;
use JTL\SCX\Client\Exception\RequestValidationFailedException;

class CreateSellerAttributesApi extends AbstractAuthAwareApi
{
    /**
     * @param CreateSellerAttributesRequest $request
     * @return CreateSellerAttributesResponse
     * @throws RequestFailedException
     * @throws RequestValidationFailedException
     * @throws GuzzleException
     */
    public function createSellerAttributes(CreateSellerAttributesRequest $request): CreateSellerAttributesResponse
    {
        $request->validate();
        $response = $this->request((string) $request->getAttributeList(), ['sellerId' => $request->getSellerId()]);
        return new CreateSellerAttributesResponse($response->getStatusCode());
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return '/channel/attribute/seller/{sellerId}';
    }

    /**
     * @return string
     */
    protected function getHttpMethod(): string
    {
        return AbstractApi::HTTP_METHOD_PUT;
    }
}
