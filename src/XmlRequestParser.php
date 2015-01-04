<?php

namespace bobchengbin\Yii2XmlRequestParser;

class XmlRequestParser implements  \yii\web\RequestParserInterface
{

    public function parse($rawBody, $contentType)
    {
        $content = Xml2Array::go($rawBody);

        return array_shift($content);
    }

}
