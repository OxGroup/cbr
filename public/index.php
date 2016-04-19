<?php
/**
 * Created by OxGroup.
 * User: Aliaxander
 * Date: 27.11.15
 * Time: 14:35
 */

use Ox\Cbr\Cbr;
echo "<pre>";
$loader = require __DIR__ . '/../vendor/autoload.php';
$date="02/03/2016";
$result= json_decode(Cbr::getCourse($date));
print_r($result);