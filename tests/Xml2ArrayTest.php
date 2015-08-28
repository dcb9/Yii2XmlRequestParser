<?php

use bobchengbin\Yii2XmlRequestParser\Xml2Array;

class Xml2ArrayTest extends PHPUnit_Framework_TestCase
{
    public function testXml2Array(){

        $xml = <<<XML
<xml>
  <item>
    <bookName><![CDATA[Yii2]]></bookName>
  </item>
</xml>
XML;

        $this->assertEquals([
            'xml'=>[
                'item'=>['bookName'=>'Yii2']
            ]
        ], Xml2Array::go($xml));

        $xml = <<<XML
<orders>
  <order id="39393930" uaNumber="A56">
    <item id="3" count="1" />
    <item id="4" count="5" />
  </order>
  <order id="58382388" uaNumber="B4">
    <item id="6" count="1" />
    <item id="8" count="2" />
  </order>
</orders>
XML;

        $this->assertEquals([
            'orders' => [
                'order' => [
                    [
                        'attr' => [
                            'id' => '39393930',
                            'uaNumber' => 'A56',
                        ],
                        'item' => [
                            [
                                'attr' => [
                                    'id' => '3',
                                    'count' => 1, 
                                ],
                            ],
                            [
                                'attr' => [
                                    'id' => '4',
                                    'count' => 5, 
                                ],
                            ],
                        ],
                    ], [
                        'attr' => [
                            'id' => '58382388',
                            'uaNumber' => 'B4',
                        ] ,
                        'item' => [
                            [
                                'attr' => [
                                    'id' => '6',
                                    'count' => 1, 
                                ],
                            ],
                            [
                                'attr' => [
                                    'id' => '8',
                                    'count' => 2, 
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ], Xml2Array::go($xml, 1, 'attribute'));
    }
}
