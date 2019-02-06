<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Test Application',

	// preloading 'log' component
	'preload'=>array('log','booster'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.extensions.*',
                'application.extensions.phpmailer.JPhpMailer'
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'monirul',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
                'booster' => array(
                    'class' =>'application.extensions.booster.components.Booster',
                ),
		'user'=>array(
			// enable cookie-based authentication
			
                   // 'class'=>'WebUser',  //Adding WebUser class
          'allowAutoLogin'=>true,
         // 'autoRenewCookie' => true,
           //    'loginUrl' => array('site/login'),
		),
            
           
            
            
//                'Smtpmail'=>array(
//                        'class'=>'application.extensions.smtpmail.PHPMailer',
//                        'Host'=>"smtp.gmail.com",
//                        'Username'=>'wizatul1@gmail.com',
//                        'Password'=>' ',
//                        'Mailer'=>'smtp',
//                        'Port'=>26,
//                        'SMTPAuth'=>true, 
//                    ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		

		// database settings are configured in database.php
		

                //'dbOracle'=>require(dirname(__FILE__).'/database.php'),
            
                'db'=>require(dirname(__FILE__).'/database.php'),
            
            

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
            

),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
           

                'ldap' => array(
                    'host' => 'mail.vecc.gov.in',
                    'port'=>'389',
                    'ou' => 'organisational-unit', // such as "people" or "users"
                   'dc' => array('gov','in',),
                ),
	),
);
