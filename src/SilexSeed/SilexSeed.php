<?php
	namespace SilexSeed;

	use Silex\Application;
	use Silex\Provider\DoctrineServiceProvider;
	use Dflydev\Silex\Provider\DoctrineOrm\DoctrineOrmServiceProvider;
	use Silex\Provider\TwigServiceProvider;

	class SilexSeed extends Application
	{
		public function __construct()
		{
			parent::__construct();

			$this['debug'] = true;

			$this->register(new TwigServiceProvider(), array(
                'twig.path' => __DIR__ . '/Views'
            ));

			$this->register(new DoctrineServiceProvider(), array(
				"db.options" => array(
					"driver"	=> "pdo_mysql",
					"host"		=> "localhost",
					"dbname"	=> "silex",
					"user"		=> "silex",
					"password"	=> "pass123",
					"port"		=> "3306"
					)
			));

			$this->register(new DoctrineOrmServiceProvider(), array(
				"orm.proxies_dir"	=> __DIR__ . "/Proxies",
				"orm.em.options"	=> array(
					"mappings"		=> array(
						array(
							"type"		=> "annotation",
							"namespace"	=> "SilexSeed\Entities",
							"path"		=> __DIR__ . "/Entities"
						)
					)
				)
			));

		}

	}
