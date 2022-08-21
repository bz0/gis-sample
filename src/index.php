<?php
require_once 'vendor/autoload.php';

use Sk\Geohash\Geohash;

$g = new Geohash();
echo $g->encode(17.38000000, 78.42000000, 8);

