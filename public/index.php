<?php
// Place this file in public/ on your web server

if (!\file_exists(__DIR__.'/../pxnloader.php')) {
	echo "\n<h2>File not found: pxnloader.php, run <i>composer install</i></h2>\n\n";
	exit(1);
}
require(__DIR__.'/../pxnloader.php');

// uncomment to force debug mode
//debug(TRUE);

$app = \pxn\xBuild\xBuildCP::register();
$app = \pxn\xBuild\xBuildShell::register();
