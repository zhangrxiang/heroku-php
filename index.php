<?php
//info
//phpinfo();
//include "function.php";
//$hostname = gethostname();
//echo $hostname.br();
//echo getIp().br();
//echo getServerIP();
//echo br();
//listServer();
//echo "<pre>";
//var_dump($_SERVER);

// This file is generated by Composer
require_once __DIR__ . '/vendor/autoload.php';
use Philo\Blade\Blade;
use \Illuminate\View\Factory;

//$client = new \Github\Client();
//$client->authenticate("zhangrxiang","github.19940918",$client::AUTH_HTTP_PASSWORD);
//$user = $client->currentUser();
//echo "<pre>";
//var_dump($show);
//$all = $user->emails()->all();
//var_dump($all);
//$show = $client->repo()->all();
//var_dump($show);

function run(){
	$views = __DIR__ . '/views';
	$cache = __DIR__ . '/cache';
	$blade = new Blade($views, $cache);
	$view  = $blade->view();
	if($view instanceof Factory){
		echo $view->make('index',[
			'hello' => 'world',
			'version' => phpversion()
		])->render();
	}

}
run();