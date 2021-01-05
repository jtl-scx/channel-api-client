<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 12/17/19
 */

namespace JTL\SCX\Client\Channel\Price;

use MyCLabs\Enum\Enum;

/**
 * Class PriceTypeEnum
 * @method static PriceType B2C()
 * @method static PriceType B2B()
 *
 * @psalm-immutable
 */
class PriceType extends Enum
{
    const B2C = "B2C";
    const B2B = "B2B";
}
