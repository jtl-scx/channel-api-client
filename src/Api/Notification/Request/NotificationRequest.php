<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 3/23/20
 */

namespace JTL\SCX\Client\Channel\Api\Notification\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\Notification;
use JTL\SCX\Client\Request\ScxApiRequest;

class NotificationRequest extends AbstractScxApiRequest
{
    private Notification $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function getNotification(): Notification
    {
        return $this->notification;
    }

    public function getUrl(): string
    {
        return '/channel/notification';
    }

    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_POST;
    }

    public function getBody(): ?string
    {
        return (string)$this->getNotification();
    }
}
