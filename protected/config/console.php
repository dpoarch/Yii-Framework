<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
		
		'db'=>array(
			'class'=>'CDbConnection',
			'connectionString' => 'mysql:host=mysql6.000webhost.com;dbname=a2411222_yiicrud',
			'emulatePrepare' => true,
			'username' => 'a2411222_yiicrud',
			'password' => 'qweqwe123',
			'charset' => 'utf8',
		),
	),
);
