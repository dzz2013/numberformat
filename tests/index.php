<?php
/**
 * 测试类
 * @author kevin
 */

require __DIR__ . '/../vendor/autoload.php';

use Kevin\NumberFormat\NumberFormat;

echo NumberFormat::byteFormat(302484321);

//输出：288.5 MB
