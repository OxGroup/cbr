<?php
/**
 * Created by OxGroup.
 * User: Aliaxander
 * Date: 27.11.15
 * Time: 14:35
 */

use Ox\Cbr\Cbr;

$loader = require __DIR__ . '/../vendor/autoload.php';

$result= json_decode(Cbr::getCourse());
print_r($result);