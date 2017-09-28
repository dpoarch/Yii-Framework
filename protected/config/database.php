<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'mysql:'.dirname(__FILE__).'/../data/schema.mysql.sql',
	// uncomment the following lines to use a MySQL database
	'connectionString' => 'mysql:host=mysql6.000webhost.com;dbname=a2411222_yiicrud',
	'emulatePrepare' => true,
	'username' => 'a2411222_yiicrud',
	'password' => 'qweqwe123',
	'charset' => 'utf8',
);