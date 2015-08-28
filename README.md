Yii2XmlRequestParser
====================

Yii2 官方只出了JsonRequestParser，但是没有 XmlRequestParser，所以就创建了这么一个库。

## Install 

add `"bobchengbin/yii2-xml-request-parser": "*"` to composer.json's require section

```
$ composer update
```

OR

```
$ composer require bobchengbin/yii2-xml-request-parser '*'
```

## Usage

```php
# file app/config/main.php
<?php

return [
    'components' => [
	'request' => [
	    'parsers' => [
                'application/xml' => [
		    'class' => 'bobchengbin\Yii2XmlRequestParser\XmlRequestParser',
		    'priority' => 'tag', // the default value is 'tag', you can set 'attribute' value
		],
	    ],
        ],
    ],
];
```

## 最终测试

然后你可以通过 postman 这种工具往你的应用发送一个 xml 的请求，然后应用那里直接通过 `Yii::$app->request->post()` 来获取数据。
