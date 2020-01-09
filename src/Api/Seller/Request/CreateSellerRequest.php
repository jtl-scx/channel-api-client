<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/18
 */

namespace JTL\SCX\Client\Channel\Api\Seller\Request;

use JTL\SCX\Client\Channel\Model\CreateSeller;
use JTL\SCX\Client\Exception\RequestValidationFailedException;
use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;

class CreateSellerRequest extends AbstractScxApiRequest
{
    /**
     * @var CreateSeller
     */
    private $createSellerModel;

    /**
     * CreateSellerRequest constructor.
     * @param CreateSeller $createSellerModel
     */
    public function __construct(CreateSeller $createSellerModel)
    {
        $this->createSellerModel = $createSellerModel;
    }

    /**
     * @return CreateSeller
     */
    public function getCreateSellerModel(): CreateSeller
    {
        return $this->createSellerModel;
    }

    /**
     * @throws RequestValidationFailedException
     */
    public function validate(): void
    {
        $this->validateModel($this->createSellerModel);
    }
}
