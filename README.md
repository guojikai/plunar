plunar
===============
A chinese lunar convert tool,written by PHP. 一个PHP写的中国阴历转换工具，用于将阳历日期转换为中国阴历日期。

Installation
------------
For Laravel 5, install the latest stable version using composer:

```
composer require guojikai-laravel
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
	$lunar_array = Plunar::convertSolarToLunar(1984, 1, 22);
} catch (PlunarException $e) {
	echo $e->getMessage();
	exit;
}
dump($lunar_array);

?>
```

output:

```php
array:7 [
  0 => "一九八三" //阴历年
  1 => "腊月" //阴历月
  2 => "二十" //阴历日
  3 => "癸亥" //天干地支
  4 => "猪" //生肖
  5 => 0 //闰月
  6 => array:3 [ //阴历日期对应数字
    0 => 1983
    1 => 12
    2 => 20
  ]
]
```