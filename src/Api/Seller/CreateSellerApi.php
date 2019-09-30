<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/18
 */

namespace JTL\SCX\Client\Channel\Api\Seller;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Api\AbstractAuthAwareApi;
use JTL\SCX\Client\Channel\Api\Seller\Request\CreateSellerRequest;
use JTL\SCX\Client\Channel\Api\Seller\Response\CreateSellerResponse;
use JTL\SCX\Client\Exception\RequestFailedException;

class CreateSellerApi extends AbstractAuthAwareApi
{
    /**
     * @param CreateSellerRequest $createSellerRequest
     * @return CreateSellerResponse
     * @throws RequestFailedException
     * @throws GuzzleException
     */
    public function create(CreateSellerRequest $createSellerRequest): CreateSellerResponse
    {
        $json = (string)$createSellerRequest->getCreateSellerModel();
        $response = $this->request($json);
        return new CreateSellerResponse($response->getStatusCode());
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return '/channel/seller';
    }

    /**
     * @return string
     */
    protected function getHttpMethod(): string
    {
        return AbstractApi::HTTP_METHOD_POST;
    }
}
