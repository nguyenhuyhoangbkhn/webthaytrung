<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=Bansach',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'hoang123',
	'charset' => 'utf8',
	'tablePrefix'=>'tbl_',
);