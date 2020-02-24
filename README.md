<div align="center">
  <img src="https://user-images.githubusercontent.com/1415186/75040771-2ed7df80-54b3-11ea-8657-41a0cae9dafc.png">
</div>

# SCX PHP-Channel-API-Client

[![Build Status](https://travis-ci.org/jtl-scx/channel-api-client.svg?branch=master)](https://travis-ci.org/jtl-scx/channel-api-client)

SCX Channel-API Client repository for JTL-Sales-Channel-Extension based on PHP. 

## Example usage
```php
$client = new Client();
$config = new Configuration('http://localhost', 'AUTHTOKEN');

$api = new CreateSellerAttributesApi($client, $config);

$attribute = new Attribute();
$attribute->setAttributeId('ATTR001');
$attribute->setDisplayName('Test Attribute');

$attributeList = new AttributeList();
$attributeList->setAttributeList([$attribute]);

$request = new CreateSellerAttributesRequest('SELLER1', $attributeList);
$api->createSellerAttributes($request);
```
