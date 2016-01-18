plunar
===============
A chinese lunar convert tool,written by PHP. 一个PHP写的中国阴历转换工具，用于将阳历日期转换为中国阴历日期。

Installation
------------
For Laravel 5, install the latest stable version using composer:

```
composer require guojikai-laravel
```

And add the middleware in `app/Http/Middleware/Kernel.php`:

```php
\Reslash\App\Http\Middleware\Reslash::class,
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
array:7 [▼
  0 => "一九八三"
  1 => "腊月"
  2 => "二十"
  3 => "癸亥"
  4 => "猪"
  5 => 0
  6 => array:3 [▶]
]
```