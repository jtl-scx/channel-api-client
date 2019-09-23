# SCX Channel API Client

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