<?php

namespace bobchengbin\Yii2XmlRequestParser;

use yii\base\InvalidParamException;
use yii\base\Component;

class XmlRequestParser extends Component implements  \yii\web\RequestParserInterface
{
    private $_priority = 'tag';

    public function parse($rawBody, $contentType)
    {
        $content = Xml2Array::go($rawBody, 1, $this->_priority);

        return array_shift($content);
    }

    public function setPriority($value)
    {
        if (!in_array($value, ['tag', 'attribute'])) {
            throw new  InvalidParamException("priority MUST be 'attribute' OR 'tag'");
        }
        $this->_priority = $value;
    }
}
