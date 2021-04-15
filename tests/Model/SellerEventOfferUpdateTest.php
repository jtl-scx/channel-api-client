<?php
/**
 * SellerEventOfferUpdateTest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SCX Channel API
 *
 * SCX Channel API
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace JTL\SCX\Client\Channel\Model;

use PHPUnit\Framework\TestCase;

/**
 * SellerEventOfferUpdateTest Class Doc Comment
 *
 * @category    Class
 * @description Update existing Offer.  If your current channel implementation process listing in asychronous manner it is recommended to call &#x60;/channel/offer/received&#x60; afterwards to mark wating Offers as in-progress. If a channel process an Offer directly you do not need to mark a Offer as &#x60;in-progress&#x60;. But it is important to mark an Offer as &#x60;successful&#x60; listed. If there are any errors during the listing process it is importand to mark a offer as &#x60;failed&#x60;.
 * @package     JTL\SCX\Client\Channel
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Client\Channel\Model\SellerEventOfferUpdate
 */
class SellerEventOfferUpdateTest extends TestCase
{



    /**
     * Test attribute "sellerId"
     * @test
     */
    public function it_has_a_SellerId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['sellerId' => $sample]);

        $this->assertMethodExists($sut, 'getSellerId');
        $this->assertSame($sample, $sut->getSellerId());

        $this->assertArrayHasKey('sellerId', $sut);
        $this->assertSame($sample, $sut['sellerId']);

    }

    /**
     * Test attribute "sellerId"
     * @test
     */
    public function it_has_a_setter_for_SellerId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setSellerId');
        $sut->setSellerId($sample);
        $this->assertSame($sample, $sut['sellerId']);
    }


    /**
     * Test attribute "offerId"
     * @test
     */
    public function it_has_a_OfferId(): void
    {
        $sample = $this->buildSampleForDataType('int');
        $sut = new SellerEventOfferUpdate(['offerId' => $sample]);

        $this->assertMethodExists($sut, 'getOfferId');
        $this->assertSame($sample, $sut->getOfferId());

        $this->assertArrayHasKey('offerId', $sut);
        $this->assertSame($sample, $sut['offerId']);

    }

    /**
     * Test attribute "offerId"
     * @test
     */
    public function it_has_a_setter_for_OfferId(): void
    {
        $sample = $this->buildSampleForDataType('int');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setOfferId');
        $sut->setOfferId($sample);
        $this->assertSame($sample, $sut['offerId']);
    }


    /**
     * Test attribute "parentOfferId"
     * @test
     */
    public function it_has_a_ParentOfferId(): void
    {
        $sample = $this->buildSampleForDataType('int');
        $sut = new SellerEventOfferUpdate(['parentOfferId' => $sample]);

        $this->assertMethodExists($sut, 'getParentOfferId');
        $this->assertSame($sample, $sut->getParentOfferId());

        $this->assertArrayHasKey('parentOfferId', $sut);
        $this->assertSame($sample, $sut['parentOfferId']);

    }

    /**
     * Test attribute "parentOfferId"
     * @test
     */
    public function it_has_a_setter_for_ParentOfferId(): void
    {
        $sample = $this->buildSampleForDataType('int');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setParentOfferId');
        $sut->setParentOfferId($sample);
        $this->assertSame($sample, $sut['parentOfferId']);
    }


    /**
     * Test attribute "channelOfferId"
     * @test
     */
    public function it_has_a_ChannelOfferId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['channelOfferId' => $sample]);

        $this->assertMethodExists($sut, 'getChannelOfferId');
        $this->assertSame($sample, $sut->getChannelOfferId());

        $this->assertArrayHasKey('channelOfferId', $sut);
        $this->assertSame($sample, $sut['channelOfferId']);

    }

    /**
     * Test attribute "channelOfferId"
     * @test
     */
    public function it_has_a_setter_for_ChannelOfferId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setChannelOfferId');
        $sut->setChannelOfferId($sample);
        $this->assertSame($sample, $sut['channelOfferId']);
    }


    /**
     * Test attribute "channelCategoryId"
     * @test
     */
    public function it_has_a_ChannelCategoryId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['channelCategoryId' => $sample]);

        $this->assertMethodExists($sut, 'getChannelCategoryId');
        $this->assertSame($sample, $sut->getChannelCategoryId());

        $this->assertArrayHasKey('channelCategoryId', $sut);
        $this->assertSame($sample, $sut['channelCategoryId']);

    }

    /**
     * Test attribute "channelCategoryId"
     * @test
     */
    public function it_has_a_setter_for_ChannelCategoryId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setChannelCategoryId');
        $sut->setChannelCategoryId($sample);
        $this->assertSame($sample, $sut['channelCategoryId']);
    }


    /**
     * Test attribute "quantity"
     * @test
     */
    public function it_has_a_Quantity(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['quantity' => $sample]);

        $this->assertMethodExists($sut, 'getQuantity');
        $this->assertSame($sample, $sut->getQuantity());

        $this->assertArrayHasKey('quantity', $sut);
        $this->assertSame($sample, $sut['quantity']);

    }

    /**
     * Test attribute "quantity"
     * @test
     */
    public function it_has_a_setter_for_Quantity(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setQuantity');
        $sut->setQuantity($sample);
        $this->assertSame($sample, $sut['quantity']);
    }


    /**
     * Test attribute "taxPercent"
     * @test
     */
    public function it_has_a_TaxPercent(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['taxPercent' => $sample]);

        $this->assertMethodExists($sut, 'getTaxPercent');
        $this->assertSame($sample, $sut->getTaxPercent());

        $this->assertArrayHasKey('taxPercent', $sut);
        $this->assertSame($sample, $sut['taxPercent']);

    }

    /**
     * Test attribute "taxPercent"
     * @test
     */
    public function it_has_a_setter_for_TaxPercent(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setTaxPercent');
        $sut->setTaxPercent($sample);
        $this->assertSame($sample, $sut['taxPercent']);
    }


    /**
     * Test attribute "priceList"
     * @test
     */
    public function it_has_a_PriceList(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\PriceContainer[]');
        $sut = new SellerEventOfferUpdate(['priceList' => $sample]);

        $this->assertMethodExists($sut, 'getPriceList');
        $this->assertSame($sample, $sut->getPriceList());

        $this->assertArrayHasKey('priceList', $sut);
        $this->assertSame($sample, $sut['priceList']);

    }

    /**
     * Test attribute "priceList"
     * @test
     */
    public function it_has_a_setter_for_PriceList(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\PriceContainer[]');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setPriceList');
        $sut->setPriceList($sample);
        $this->assertSame($sample, $sut['priceList']);
    }


    /**
     * Test attribute "title"
     * @test
     */
    public function it_has_a_Title(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['title' => $sample]);

        $this->assertMethodExists($sut, 'getTitle');
        $this->assertSame($sample, $sut->getTitle());

        $this->assertArrayHasKey('title', $sut);
        $this->assertSame($sample, $sut['title']);

    }

    /**
     * Test attribute "title"
     * @test
     */
    public function it_has_a_setter_for_Title(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setTitle');
        $sut->setTitle($sample);
        $this->assertSame($sample, $sut['title']);
    }


    /**
     * Test attribute "subTitle"
     * @test
     */
    public function it_has_a_SubTitle(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['subTitle' => $sample]);

        $this->assertMethodExists($sut, 'getSubTitle');
        $this->assertSame($sample, $sut->getSubTitle());

        $this->assertArrayHasKey('subTitle', $sut);
        $this->assertSame($sample, $sut['subTitle']);

    }

    /**
     * Test attribute "subTitle"
     * @test
     */
    public function it_has_a_setter_for_SubTitle(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setSubTitle');
        $sut->setSubTitle($sample);
        $this->assertSame($sample, $sut['subTitle']);
    }


    /**
     * Test attribute "description"
     * @test
     */
    public function it_has_a_Description(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['description' => $sample]);

        $this->assertMethodExists($sut, 'getDescription');
        $this->assertSame($sample, $sut->getDescription());

        $this->assertArrayHasKey('description', $sut);
        $this->assertSame($sample, $sut['description']);

    }

    /**
     * Test attribute "description"
     * @test
     */
    public function it_has_a_setter_for_Description(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setDescription');
        $sut->setDescription($sample);
        $this->assertSame($sample, $sut['description']);
    }


    /**
     * Test attribute "mainPicture"
     * @test
     */
    public function it_has_a_MainPicture(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['mainPicture' => $sample]);

        $this->assertMethodExists($sut, 'getMainPicture');
        $this->assertSame($sample, $sut->getMainPicture());

        $this->assertArrayHasKey('mainPicture', $sut);
        $this->assertSame($sample, $sut['mainPicture']);

    }

    /**
     * Test attribute "mainPicture"
     * @test
     */
    public function it_has_a_setter_for_MainPicture(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setMainPicture');
        $sut->setMainPicture($sample);
        $this->assertSame($sample, $sut['mainPicture']);
    }


    /**
     * Test attribute "pictureList"
     * @test
     */
    public function it_has_a_PictureList(): void
    {
        $sample = $this->buildSampleForDataType('string[]');
        $sut = new SellerEventOfferUpdate(['pictureList' => $sample]);

        $this->assertMethodExists($sut, 'getPictureList');
        $this->assertSame($sample, $sut->getPictureList());

        $this->assertArrayHasKey('pictureList', $sut);
        $this->assertSame($sample, $sut['pictureList']);

    }

    /**
     * Test attribute "pictureList"
     * @test
     */
    public function it_has_a_setter_for_PictureList(): void
    {
        $sample = $this->buildSampleForDataType('string[]');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setPictureList');
        $sut->setPictureList($sample);
        $this->assertSame($sample, $sut['pictureList']);
    }


    /**
     * Test attribute "channelAttributeList"
     * @test
     */
    public function it_has_a_ChannelAttributeList(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\ChannelAttribute[]');
        $sut = new SellerEventOfferUpdate(['channelAttributeList' => $sample]);

        $this->assertMethodExists($sut, 'getChannelAttributeList');
        $this->assertSame($sample, $sut->getChannelAttributeList());

        $this->assertArrayHasKey('channelAttributeList', $sut);
        $this->assertSame($sample, $sut['channelAttributeList']);

    }

    /**
     * Test attribute "channelAttributeList"
     * @test
     */
    public function it_has_a_setter_for_ChannelAttributeList(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\ChannelAttribute[]');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setChannelAttributeList');
        $sut->setChannelAttributeList($sample);
        $this->assertSame($sample, $sut['channelAttributeList']);
    }


    /**
     * Test attribute "variationList"
     * @test
     */
    public function it_has_a_VariationList(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\Variation[]');
        $sut = new SellerEventOfferUpdate(['variationList' => $sample]);

        $this->assertMethodExists($sut, 'getVariationList');
        $this->assertSame($sample, $sut->getVariationList());

        $this->assertArrayHasKey('variationList', $sut);
        $this->assertSame($sample, $sut['variationList']);

    }

    /**
     * Test attribute "variationList"
     * @test
     */
    public function it_has_a_setter_for_VariationList(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\Variation[]');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setVariationList');
        $sut->setVariationList($sample);
        $this->assertSame($sample, $sut['variationList']);
    }


    /**
     * Test attribute "sku"
     * @test
     */
    public function it_has_a_Sku(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['sku' => $sample]);

        $this->assertMethodExists($sut, 'getSku');
        $this->assertSame($sample, $sut->getSku());

        $this->assertArrayHasKey('sku', $sut);
        $this->assertSame($sample, $sut['sku']);

    }

    /**
     * Test attribute "sku"
     * @test
     */
    public function it_has_a_setter_for_Sku(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setSku');
        $sut->setSku($sample);
        $this->assertSame($sample, $sut['sku']);
    }


    /**
     * Test attribute "gtin"
     * @test
     */
    public function it_has_a_Gtin(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['gtin' => $sample]);

        $this->assertMethodExists($sut, 'getGtin');
        $this->assertSame($sample, $sut->getGtin());

        $this->assertArrayHasKey('gtin', $sut);
        $this->assertSame($sample, $sut['gtin']);

    }

    /**
     * Test attribute "gtin"
     * @test
     */
    public function it_has_a_setter_for_Gtin(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setGtin');
        $sut->setGtin($sample);
        $this->assertSame($sample, $sut['gtin']);
    }


    /**
     * Test attribute "mpn"
     * @test
     */
    public function it_has_a_Mpn(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['mpn' => $sample]);

        $this->assertMethodExists($sut, 'getMpn');
        $this->assertSame($sample, $sut->getMpn());

        $this->assertArrayHasKey('mpn', $sut);
        $this->assertSame($sample, $sut['mpn']);

    }

    /**
     * Test attribute "mpn"
     * @test
     */
    public function it_has_a_setter_for_Mpn(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setMpn');
        $sut->setMpn($sample);
        $this->assertSame($sample, $sut['mpn']);
    }


    /**
     * Test attribute "isbn"
     * @test
     */
    public function it_has_a_Isbn(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['isbn' => $sample]);

        $this->assertMethodExists($sut, 'getIsbn');
        $this->assertSame($sample, $sut->getIsbn());

        $this->assertArrayHasKey('isbn', $sut);
        $this->assertSame($sample, $sut['isbn']);

    }

    /**
     * Test attribute "isbn"
     * @test
     */
    public function it_has_a_setter_for_Isbn(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setIsbn');
        $sut->setIsbn($sample);
        $this->assertSame($sample, $sut['isbn']);
    }


    /**
     * Test attribute "brand"
     * @test
     */
    public function it_has_a_Brand(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate(['brand' => $sample]);

        $this->assertMethodExists($sut, 'getBrand');
        $this->assertSame($sample, $sut->getBrand());

        $this->assertArrayHasKey('brand', $sut);
        $this->assertSame($sample, $sut['brand']);

    }

    /**
     * Test attribute "brand"
     * @test
     */
    public function it_has_a_setter_for_Brand(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setBrand');
        $sut->setBrand($sample);
        $this->assertSame($sample, $sut['brand']);
    }


    /**
     * Test attribute "srp"
     * @test
     */
    public function it_has_a_Srp(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\Price');
        $sut = new SellerEventOfferUpdate(['srp' => $sample]);

        $this->assertMethodExists($sut, 'getSrp');
        $this->assertSame($sample, $sut->getSrp());

        $this->assertArrayHasKey('srp', $sut);
        $this->assertSame($sample, $sut['srp']);

    }

    /**
     * Test attribute "srp"
     * @test
     */
    public function it_has_a_setter_for_Srp(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\Price');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setSrp');
        $sut->setSrp($sample);
        $this->assertSame($sample, $sut['srp']);
    }


    /**
     * Test attribute "productAttributeList"
     * @test
     */
    public function it_has_a_ProductAttributeList(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\ProductAttribute[]');
        $sut = new SellerEventOfferUpdate(['productAttributeList' => $sample]);

        $this->assertMethodExists($sut, 'getProductAttributeList');
        $this->assertSame($sample, $sut->getProductAttributeList());

        $this->assertArrayHasKey('productAttributeList', $sut);
        $this->assertSame($sample, $sut['productAttributeList']);

    }

    /**
     * Test attribute "productAttributeList"
     * @test
     */
    public function it_has_a_setter_for_ProductAttributeList(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\ProductAttribute[]');
        $sut = new SellerEventOfferUpdate();

        $this->assertMethodExists($sut, 'setProductAttributeList');
        $sut->setProductAttributeList($sample);
        $this->assertSame($sample, $sut['productAttributeList']);
    }

    private function assertMethodExists(SellerEventOfferUpdate $sut, string $methodName): void
    {
        try {
            $_ = (new \ReflectionClass($sut))->getMethod($methodName);
        } catch (\ReflectionException $e) {
            self::fail("No public method {$methodName} found in " . get_class($sut));
        }
        $this->assertTrue(true);
    }

    private function buildSampleForDataType(string $dataType)
    {
        $isArray = substr($dataType, -2) === '[]';

        if ($isArray) {
            $dataType = substr($dataType, 0, strlen($dataType)-2);
        }

        $isMap = substr($dataType, 0, 3) === 'map';
        if ($isMap) {
            $isArray = true;
            $dataType = 'string';
        }

        switch ($dataType) {
            case '\SplFileObject':
                $sampleData = new \SplFileObject('php://memory');
                break;
            case 'object':
                $sampleData = $this->createStub('\stdClass');
                break;
            case 'integer':
            case 'int':
                $sampleData = random_int(100, 10000);
                break;
            case 'double':
            case 'float':
                $sampleData = random_int(100, 10000)/pi();
                break;
            case 'bool':
            case 'boolean':
                $sampleData = (bool)random_int(0, 1);
                break;
            case 'string':
            case 'text':
                $sampleData = uniqid('a_string');
                break;
            default:
                $sampleData = $this->createStub($dataType);
        }

        if ($isArray) {
            $sampleData = [$sampleData];
        }
        return $sampleData;
    }
}
