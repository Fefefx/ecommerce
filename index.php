<?php 

require_once("vendor/autoload.php");
require_once("vendor/hcodebr/php-classes/src/page.php");
require_once("vendor/hcodebr/php-classes/src/pageAdmin.php");

use Hcode\Page;
use Hcode\PageAdmin;
use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
	$page = new Page();
	$page->setTpl("index");
});

$app->get('/admin', function(){
	$page = new PageAdmin();
	$page->setTpl("index");
});

$app->run();

?>