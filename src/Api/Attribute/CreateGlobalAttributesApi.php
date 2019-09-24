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
use JTL\SCX\Client\Channel\Api\Attribute\Request\CreateGlobalAttributesRequest;
use JTL\SCX\Client\Channel\Api\Attribute\Response\CreateGlobalAttributesResponse;
use JTL\SCX\Client\Exception\RequestFailedException;
use JTL\SCX\Client\Exception\RequestValidationFailedException;

class CreateGlobalAttributesApi extends AbstractApi
{
    /**
     * @param CreateGlobalAttributesRequest $request
     * @return CreateGlobalAttributesResponse
     * @throws RequestFailedException
     * @throws RequestValidationFailedException
     * @throws GuzzleException
     */
    public function createGlobalAttributes(CreateGlobalAttributesRequest $request): CreateGlobalAttributesResponse
    {
        $request->validate();
        $response = $this->request((string)$request->getAttributeList());

        return new CreateGlobalAttributesResponse($response->getStatusCode());
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return '/channel/attribute/global';
    }

    /**
     * @return string
     */
    protected function getHttpMethod(): string
    {
        return AbstractApi::HTTP_METHOD_PUT;
    }
}
