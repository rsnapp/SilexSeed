<?php

	require_once getenv('COMPOSER_AUTOLOAD');

	$app = new SilexSeed\SilexSeed();
	
	$app->get('/', function() {
		return 'SilexSeed is Working!';
	});

	$app->run();
