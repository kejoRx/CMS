<?php

use App\core\App;

App::bind('config', $config = require 'config.php');

App::bind('database', new QueryBuilder(
	connection::make($config['database']))
);


function view($name, $data = [])

{

	extract($data);

	return require "app/views/{$name}.view.php";
}

function model($name, $data = []) {

	extract($data);

	return require "app/models/{$name}.php";
}

function viewPartials($name, $data = [])

{
	extract($data);

	return require "app/views/partials/{$name}.php";
}

function viewTemplates($name, $data = [])

{

	extract($data);

	return require "app/views/partials/templates/{$name}.view.php";
}

function redirect($path){

	header("Location: /{$path}");

}



