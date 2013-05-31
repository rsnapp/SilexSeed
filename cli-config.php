<?php

	require_once getenv("COMPOSER_AUTOLOAD");

	$app = new SilexSeed\SilexSeed();

	$helpperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
		'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($app['orm.em'])
	));