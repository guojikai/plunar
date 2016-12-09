<?php

require '../vendor/autoload.php';

date_default_timezone_set('Asia/Shanghai');

use Plunar\Plunar;
use Plunar\PlunarException;

try {
    //$lunar_array = Plunar::solarToLunar(464637600);
    $lunar_array = Plunar::solarToLunar(1984, 9, 22);
} catch (PlunarException $e) {
    echo $e->getMessage();
    exit;
}

var_dump($lunar_array);

?>

