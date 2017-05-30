Plunar
======
一个PHP版中国阴历转换工具，用于将阳历日期转换为中国阴历日期。

[![Total Downloads](https://poser.pugx.org/guojikai/plunar/downloads)](https://packagist.org/packages/guojikai/plunar)
[![Latest Stable Version](https://poser.pugx.org/guojikai/plunar/v/stable)](https://packagist.org/packages/guojikai/plunar)
[![Latest Unstable Version](https://poser.pugx.org/guojikai/plunar/v/unstable)](https://packagist.org/packages/guojikai/plunar)
[![License](https://poser.pugx.org/guojikai/plunar/license)](https://packagist.org/packages/guojikai/plunar)
[![Build Status](https://travis-ci.org/guojikai/plunar.svg?branch=master)](https://travis-ci.org/guojikai/plunar)

安装
----
使用 Composer 安装：

```
composer require guojikai/plunar
```
在入口文件引入 Composer 启动脚本： (eg. index.php)

```php
require 'vendor/autoload.php';
```

使用
----
```php
<?php

use Plunar\Plunar;
use Plunar\PlunarException;

try {
    //支持字符串输入形式 Plunar::solarToLunar('1984-09-22'); 
    $lunar_array = Plunar::solarToLunar(1984, 9, 22);
} catch (PlunarException $e) {
    echo $e->getMessage();
    exit;
}

var_dump($lunar_array);

?>
```

输出：

```php
array:7 [
  0 => "一九八四" //阴历年
  1 => "八月" //阴历月
  2 => "廿七" //阴历日
  3 => "甲子" //天干地支
  4 => "鼠" //生肖
  5 => "闰十月" //闰月
  6 => array:3 [ //阴历日期对应数字
    0 => 1984
    1 => 8
    2 => 27
  ]
]
```
