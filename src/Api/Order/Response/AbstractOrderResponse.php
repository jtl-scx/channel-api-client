<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-03-06
 */

namespace JTL\SCX\Client\Channel\Api\Order\Response;

use JTL\SCX\Client\Channel\Model\ErrorResponse;
use JTL\SCX\Client\Response\AbstractResponse;

abstract class AbstractOrderResponse extends AbstractResponse
{
    /**
     * @var ErrorResponse[]|null
     */
    private ?array $errorList = null;

    /**
     * @param int $statusCode
     * @param ErrorResponse[] $errorList
     */
    public function __construct(int $statusCode, array $errorList = null)
    {
        parent::__construct($statusCode);
        $this->errorList = $errorList;
    }

    public function hasError(): bool
    {
        return $this->errorList !== null;
    }

    public function orderIdHasError(string $orderId): bool
    {
        foreach ($this->errorList ?? [] as $error) {
            if (strpos($error->getMessage(), $orderId) !== false) {
                return true;
            }
        }
        return false;
    }

    /**
     * @return ErrorResponse[]|null
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }
}
