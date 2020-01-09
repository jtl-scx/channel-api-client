<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Channel\Request;

use JTL\SCX\Client\Channel\Model\ChannelUpdate;
use JTL\SCX\Client\Exception\RequestValidationFailedException;
use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;

class UpdateChannelRequest extends AbstractScxApiRequest
{
    /**
     * @var ChannelUpdate
     */
    private $channelUpdate;

    /**
     * UpdateChannelRequest constructor.
     * @param ChannelUpdate $channelUpdate
     */
    public function __construct(ChannelUpdate $channelUpdate)
    {
        $this->channelUpdate = $channelUpdate;
    }

    /**
     * @return ChannelUpdate
     */
    public function getChannelUpdate(): ChannelUpdate
    {
        return $this->channelUpdate;
    }

    /**
     * @throws RequestValidationFailedException
     */
    public function validate(): void
    {
        $this->validateModel($this->channelUpdate);
    }
}
