<?php declare(strict_types=1);
/**
 * This script will demonstrate how to use the Order API to update a Seller
 */
require_once __DIR__ . '/../vendor/autoload.php';

use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Api\Configuration;
use JTL\SCX\Client\Channel\Api\Seller\SellerApi;
use JTL\SCX\Client\Channel\Model\UpdateSeller;

if (!isset($argv[1])) {
    throw new InvalidArgumentException("Provide a api refresh token as first argument");
}

if (!isset($argv[2])) {
    throw new InvalidArgumentException("Provide update sessionId");
}

$refreshToken = $argv[1];
$updateSessionId = $argv[2];

$configuration = new Configuration(Configuration::HOST_PRODUCTION, $refreshToken);
$configuration = new Configuration('https://scx-stg.api.jtl-software.com', $refreshToken);
$client = new AuthAwareApiClient($configuration);

$api = new SellerApi($client);

$updateSession = $api->getSellerIdFromUpdateSession($updateSessionId);

printf("Update Session belongs to SellerId = %s\n", $updateSession->getSellerId());
$updateSeller = new UpdateSeller([
    'session' => $updateSessionId,
    'isActive' => true
]);
echo $updateSeller;
$api->update($updateSeller);
echo "Update Session executed\n";

