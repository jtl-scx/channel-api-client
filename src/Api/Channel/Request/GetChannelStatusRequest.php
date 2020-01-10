<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-01-10
 */

namespace JTL\SCX\Client\Channel\Api\Channel\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Request\ScxApiRequest;

class GetChannelStatusRequest extends AbstractScxApiRequest
{
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return '/channel';
    }

    /**
     * @return string
     */
    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_GET;
    }
}