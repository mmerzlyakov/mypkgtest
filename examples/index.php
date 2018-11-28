<?php

/*
 * Consumer for Vietnam messages
 * Michael S. Merzlyakov AFKA predator_pc@27112018
 *
 * */

require __DIR__ . '/vendor/autoload.php';

use mmerzlyakov\mypkgtest\geo;

$geo = new geo();

$geo->setCode("000010231");

echo $geo->getCode();


?>