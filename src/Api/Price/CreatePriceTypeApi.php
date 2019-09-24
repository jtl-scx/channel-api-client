<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Price;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\Api\Price\Request\CreatePriceTypeRequest;
use JTL\SCX\Client\Channel\Api\Price\Response\CreatePriceTypeResponse;
use JTL\SCX\Client\Exception\RequestFailedException;
use JTL\SCX\Client\Exception\RequestValidationFailedException;

class CreatePriceTypeApi extends AbstractApi
{
    /**
     * @param CreatePriceTypeRequest $request
     * @return CreatePriceTypeResponse
     * @throws RequestFailedException
     * @throws RequestValidationFailedException
     * @throws GuzzleException
     */
    public function create(CreatePriceTypeRequest $request): CreatePriceTypeResponse
    {
        $request->validate();
        $response = $this->request((string)$request->getPriceType());
        return new CreatePriceTypeResponse($response->getStatusCode());
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return '/channel/price';
    }

    /**
     * @return string
     */
    protected function getHttpMethod(): string
    {
        return AbstractApi::HTTP_METHOD_POST;
    }
}
