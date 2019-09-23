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
use JTL\SCX\Client\Channel\Api\Attribute\Response\CreateCategoryAttributesResponse;
use JTL\SCX\Client\Exception\RequestFailedException;
use JTL\SCX\Client\Exception\RequestValidationFailedException;

class CreateCategoryAttributesApi extends AbstractApi
{
    /**
     * @param CreateCategoryAttributesRequest $request
     * @return CreateCategoryAttributesResponse
     * @throws RequestFailedException
     * @throws RequestValidationFailedException
     */
    public function createCategoryAttributes(CreateCategoryAttributesRequest $request): CreateCategoryAttributesResponse
    {
        $request->validate();
        $response = $this->request((string)$request->getAttributeList(), ['categoryId' => $request->getCategoryId()]);

        return new CreateCategoryAttributesResponse($response->getStatusCode());
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return '/channel/attribute/category/{categoryId}';
    }

    /**
     * @return string
     */
    protected function getHttpMethod(): string
    {
        return AbstractApi::HTTP_METHOD_PUT;
    }
}
