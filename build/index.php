<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

define('WD', '.');

require(WD . '/kirby/bootstrap.php');
require(WD . '/site/plugins/static-site-generator/index.php');

$kirby = kirby();
$site = $kirby->site();

// todo: fix for domains other than user.github.io, eg. custom CNAME
$dir = '/';
if(!empty($argv[1])) {
	$dir = $argv[1];
}

/*
if(!is_dir(WD. '/log/')) {
	mkdir(WD. '/log/');
}

file_put_contents(WD. '/log/' . 'log-'.time().'.txt', '1');
*/

$staticSiteGenerator = new D4L\StaticSiteGenerator($kirby, null, null);
$fileList = $staticSiteGenerator->generate(WD . '/docs', '/' . $dir . '/');
