Yii2XmlRequestParser
====================

Yii2 官方只出了JsonRequestParser，但是没有 XmlRequestParser，所以就创建了这么一个库。

[![Build Status](https://travis-ci.org/bobchengbin/Yii2XmlRequestParser.svg?branch=master)](https://travis-ci.org/bobchengbin/Yii2XmlRequestParser)

## Install 

add `bobchengbin/yii2-xml-request-parser` to composer.json

```
$ composer install
```

OR

```
$ composer update
```

## Usage

```php
# file app/config/main.php
<?php

return [
    'components' => [
	'request' => [
	    'parsers' => [
		'text/xml' => 'bobchengbin\Yii2XmlRequestParser\XmlRequestParser',
                'application/xml' => 'bobchengbin\Yii2XmlRequestParser\XmlRequestParser',
	    ],
        ],
    ],
];
```

## 最终测试

然后你可以通过 postman 这种工具往你的应用发送一个 xml 的请求，然后应用那里直接通过 `Yii::$app->request->post()` 来获取数据。
