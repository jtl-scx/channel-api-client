<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/20
 */

namespace JTL\SCX\Client\Channel\Api\Category\Request;

use JTL\SCX\Client\Channel\Model\ChannelCategoryTree;
use JTL\SCX\Client\Exception\RequestValidationFailedException;
use JTL\SCX\Client\Request\AbstractRequest;

class UpdateCategoryTreeRequest extends AbstractRequest
{
    /**
     * @var ChannelCategoryTree
     */
    private $channelCategoryTree;

    /**
     * UpdateCategoryTreeRequest constructor.
     * @param ChannelCategoryTree $channelCategoryTree
     */
    public function __construct(ChannelCategoryTree $channelCategoryTree)
    {
        $this->channelCategoryTree = $channelCategoryTree;
    }

    /**
     * @return ChannelCategoryTree
     */
    public function getChannelCategoryTree(): ChannelCategoryTree
    {
        return $this->channelCategoryTree;
    }

    /**
     * @throws RequestValidationFailedException
     */
    public function validate(): void
    {
        foreach ($this->channelCategoryTree->getCategoryList() as $category) {
            $this->validateModel($category);
        }
    }
}
