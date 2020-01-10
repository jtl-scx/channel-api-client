<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/18
 */

namespace JTL\SCX\Client\Channel\Api\Seller\Request;

use JTL\SCX\Client\Channel\Model\CreateSeller;
use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Request\ScxApiRequest;

class CreateSellerRequest extends AbstractScxApiRequest
{
    private CreateSeller $createSellerModel;

    public function __construct(CreateSeller $createSellerModel)
    {
        $this->createSellerModel = $createSellerModel;
    }

    public function getCreateSellerModel(): CreateSeller
    {
        return $this->createSellerModel;
    }

    public function getUrl(): string
    {
        return '/channel/seller';
    }

    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_POST;
    }

    public function getBody(): string
    {
        return (string)$this->getCreateSellerModel();
    }
}
