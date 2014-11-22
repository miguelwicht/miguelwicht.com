<?php

return array(
	'default' => 'mysql',

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => app_path().'/database/wardrobe.sqlite',
			'prefix'   => '',
		),

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => getenv('WARDROBE_DB_HOST'),
			'database'  => getenv('WARDROBE_DB_NAME'),
			'username'  => getenv('WARDROBE_DB_USER'),
			'password'  => getenv('WARDROBE_DB_PASSWORD'),
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),

		'sqlsrv' => array(
			'driver'   => 'sqlsrv',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'prefix'   => '',
		),

	),
);
