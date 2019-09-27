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
use JTL\SCX\Client\Channel\Api\Attribute\Request\DeleteGlobalAttributeRequest;
use JTL\SCX\Client\Channel\Api\Attribute\Response\DeleteGlobalAttributeResponse;
use JTL\SCX\Client\Exception\RequestFailedException;

class DeleteGlobalAttributeApi extends AbstractAuthAwareApi
{
    /**
     * @param DeleteGlobalAttributeRequest $request
     * @return DeleteGlobalAttributeResponse
     * @throws RequestFailedException
     * @throws GuzzleException
     */
    public function deleteAttribute(DeleteGlobalAttributeRequest $request): DeleteGlobalAttributeResponse
    {
        $response = $this->request(null, ['attributeId' => $request->getAttributeId()]);
        return new DeleteGlobalAttributeResponse($response->getStatusCode());
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return '/channel/attribute/global/{attributeId}';
    }

    /**
     * @return string
     */
    protected function getHttpMethod(): string
    {
        return AbstractApi::HTTP_METHOD_DELETE;
    }
}
