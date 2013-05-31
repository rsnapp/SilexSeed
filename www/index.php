<?php

	require_once getenv('COMPOSER_AUTOLOAD');

	$app = new SilexSeed\SilexSeed();
	
	$app->get('/', function() use($app) {
    	return $app['twig']->render('angular.twig.html');
	});

	$app->get('/api', function() {
		return '';
	});

	$app->run();
