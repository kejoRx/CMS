<?php


require 'vendor/autoload.php';
require 'core/Bootstrap.php';


use App\core\{Router, Request};



Router::load('app/routes.php')
	->direct(Request::uri(), Request::method());

