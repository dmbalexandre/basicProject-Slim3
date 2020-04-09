<?php

$app->get('/', function ($request, $response, $args) {
	return $this->view->render($response, 'home.php');
});

$app->get('/about', function ($request, $response, $args) {
	die('about!!!');
});