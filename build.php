<?php

define('DS', DIRECTORY_SEPARATOR);
require('.' . DS . 'kirby' . DS . 'bootstrap.php');

$kirby = kirby();
$site = $kirby->site();

var_dump($kirby);

// $staticSiteGenerator = new D4L\StaticSiteGenerator($kirby, $pathsToCopy = null, $pages = null);
// $fileList = $staticSiteGenerator->generate($outputFolder = './static', $baseUrl = '/', $preserve = []);
