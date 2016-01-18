Plunar
===============
A chinese lunar convert tool,written by PHP. 一个PHP写的中国阴历转换工具，用于将阳历日期转换为中国阴历日期。

Installation
------------
Install the latest stable version using composer:

```
composer require guojikai/plunar
```
And add the require in your index file: (eg. index.php)

```php
require 'vendor/autoload.php';
```

Usege
-----
```php
<?php

use Plunar\Plunar;
use Plunar\PlunarException;

try {
	$lunar_array = Plunar::convertSolarToLunar(1984, 9, 22);
} catch (PlunarException $e) {
	echo $e->getMessage();
	exit;
}

print_r($lunar_array);

?>
```

output:

```php
array:7 [
  0 => "一九八四" //阴历年
  1 => "八月" //阴历月
  2 => "廿七" //阴历日
  3 => "甲子" //天干地支
  4 => "鼠" //生肖
  5 => 闰十月 //闰月
  6 => array:3 [ //阴历日期对应数字
    0 => 1984
    1 => 8
    2 => 27
  ]
]
```