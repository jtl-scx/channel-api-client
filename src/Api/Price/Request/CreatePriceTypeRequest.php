<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Price\Request;

use JTL\SCX\Client\Channel\Model\PriceType;
use JTL\SCX\Client\Exception\RequestValidationFailedException;
use JTL\SCX\Client\Request\AbstractRequest;

class CreatePriceTypeRequest extends AbstractRequest
{
    /**
     * @var PriceType
     */
    private $priceType;

    /**
     * CreatePriceTypeRequest constructor.
     * @param PriceType $priceType
     */
    public function __construct(PriceType $priceType)
    {
        $this->priceType = $priceType;
    }

    /**
     * @return PriceType
     */
    public function getPriceType(): PriceType
    {
        return $this->priceType;
    }

    /**
     * @throws RequestValidationFailedException
     */
    public function validate(): void
    {
        $this->validateModel($this->priceType);
    }
}
