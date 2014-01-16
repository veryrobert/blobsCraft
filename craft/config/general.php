<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

// $_SERVER['SERVER_NAME'] = 'blobs.dev'
// $_SERVER['SERVER_NAME'] = 'blaithinennis.com'

// this is so you can have multiple options

return array(
    '*' => array(
        'omitScriptNameInUrls' => true,
        'devMode' => true,
        'environmentVariables' => array(
        	'siteUrl' => 'http://blobs.dev/',
        	'basePath' => '/Users/robertfarrelly/Documents/Dropbox/htdocs/craft/public/'
        )
    ),
    'new.blaithinennis.com' => array(
        'cooldownDuration' => 0,

          'environmentVariables' => array(
        	'siteUrl' => 'http://new.blaithinennis.com/',
        	'basePath' => '/home/smongey/webapps/blaithinennis/public/'
        )
    )
);