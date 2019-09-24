<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/20
 */

namespace JTL\SCX\Client\Channel\Api\Category;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\Api\Category\Request\UpdateCategoryTreeRequest;
use JTL\SCX\Client\Channel\Api\Category\Response\UpdateCategoryTreeResponse;
use JTL\SCX\Client\Exception\RequestFailedException;
use JTL\SCX\Client\Exception\RequestValidationFailedException;

class UpdateCategoryTreeApi extends AbstractApi
{
    /**
     * @param UpdateCategoryTreeRequest $request
     * @return UpdateCategoryTreeResponse
     * @throws RequestFailedException
     * @throws RequestValidationFailedException
     * @throws GuzzleException
     */
    public function update(UpdateCategoryTreeRequest $request): UpdateCategoryTreeResponse
    {
        $request->validate();
        $response = $this->request((string)$request->getChannelCategoryTree());

        return new UpdateCategoryTreeResponse($response->getStatusCode());
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return '/channel/categories';
    }

    /**
     * @return string
     */
    protected function getHttpMethod(): string
    {
        return AbstractApi::HTTP_METHOD_PUT;
    }
}
