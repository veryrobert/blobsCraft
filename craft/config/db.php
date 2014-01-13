<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */



return array(

	// 'server' => 'localhost',
	// 'user' => 'root',
	// 'password' => 'root',
	// 'database' => 'blobs',
	// 'tablePrefix' => 'craft',

	'*' => array(

			'tablePrefix' => 'craft',
			'server' => 'localhost',
			'user' => 'root',
			'password' => 'root',
			'database' => 'blobs'

		),

	'new.blaithinennis.com' => array(

			'server' => 'localhost',
			'user' => 'smngy',
			'password' => 'blobsDB',
			'database' => 'blobs'

		),

	'blaithinennis.com' => array(

		'server' => 'localhost',
		'user' => 'smngy',
		'password' => 'blobsDB',
		'database' => 'blobs'

	)

);

