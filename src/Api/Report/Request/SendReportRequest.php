<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2020/04/24
 */

namespace JTL\SCX\Client\Channel\Api\Report\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\ModelInterface;
use JTL\SCX\Client\Channel\ObjectSerializer;
use JTL\SCX\Client\Request\ScxApiRequest;

class SendReportRequest extends AbstractScxApiRequest
{
    private array $reportData;

    private string $reportId;

    private bool $enableCompression;

    /**
     * SendReportRequest constructor.
     * @param string $reportId
     * @param ModelInterface[] $reportData
     * @param bool $enableCompression
     */
    public function __construct(string $reportId, array $reportData, bool $enableCompression = true)
    {
        $this->reportData = $reportData;
        $this->reportId = $reportId;
        $this->enableCompression = $enableCompression;
    }

    public function getUrl(): string
    {
        return '/channel/report/{reportId}';
    }

    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_POST;
    }

    public function getParams(): array
    {
        return ['reportId' => $this->reportId];
    }

    public function getAdditionalHeaders(): array
    {
        if ($this->enableCompression) {
            return ['Content-Encoding' => 'gzip'];
        }

        return [];
    }

    public function getBody(): ?string
    {
        $body = json_encode(ObjectSerializer::sanitizeForSerialization($this->reportData));
        if ($this->enableCompression) {
            $body = gzencode($body);
        }
        return $body;
    }
}
