<?php

define('DS', DIRECTORY_SEPARATOR);
require('..' . DS . '..' . DS . 'kirby' . DS . 'bootstrap.php');

$kirby = kirby();
$site = $kirby->site();

$staticSiteGenerator = new D4L\StaticSiteGenerator($kirby, $pathsToCopy = null, $pages = null);
$fileList = $staticSiteGenerator->generate($outputFolder = './static', $baseUrl = '/', $preserve = []);

