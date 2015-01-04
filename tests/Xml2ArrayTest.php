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
        $data = Xml2Array::go($xml);

        $this->assertEquals([
            'xml'=>[
                'item'=>['bookName'=>'Yii2']
            ]
        ], $data);

    }
}
