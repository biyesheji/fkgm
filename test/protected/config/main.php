<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'富康工贸公司',
    'defaultController' => 'index',
     'language' => 'zh_cn',
	// preloading 'log' component
	'preload'=>array('log'),
	'theme' => 'fkgm',

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		// 工具包
		'application.util.*',
		//扩展包
		'application.extensions.*',
		//添加service层
		'application.service.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
		'admin',
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl' => array('admin/default/login'),
		),
		// uncomment the following to enable URLs in path-format

		'session' => array(
			'class' => 'CDbHttpSession',
			'timeout' => '1000',
			),
		// 设置CSRF防范 cookie 防范
		'request'=>array(
            'enableCsrfValidation'=>true,
            'enableCookieValidation'=>true,
        ),

		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'urlSuffix' => '.html',//后缀
			'rules'=>array(
				// 'product/search/<texture:\w+>-<people:\w+>-<price:\d+>-<class_id:\d+>-<volume:\d+>-<heft:\d+>' => 'product/search',
				// 'product/search/<texture:\w+>-<people:\w+>-<price:\d+>-<class_id:\d+>-<volume:\d+>-<heft:\d+>' => 'product/search/texture/<texture:\w+>/people/<people:\w+>/price/<price:\d+>/class_id/<class_id:\d+>/volume/<volume:\d+>/heft/<heft:\d+>',
				// 'product/search/<texture:\w+>-<people:\w+>-<price:\d+>-<class_id:\d+>-<volume:\d+>-<heft:\d+>' => 'product/search/texture/people/price/class_id/volume/heft',
				// 'product/search/<texture:\w+>-<people:\w+>-<price:\d+>-<class_id:\d+>-<volume:\d+>-<heft:\d+>' => 'product/search/<texture:\w+><people:\w+><class_id:\d+><volume:\d+><heft:\d+>',
				// 'product/search/<texture:\w+>-<people:\w+>-<price:\d+>-<class_id:\d+>-<volume:\d+>-<heft:\d+>' => 'product/search/texture/<texture:\w+>/people/<people:\w+>/price/<price:\d+>/class_id/<class_id:\d+>/volume/<volume:\d+>/heft/<heft:\d+>',
				'product/<id:\d+>' =>'product/detail',
				'product/comment/<id:\d+>' =>'product/comment',
				'news/<id:\d+>' => 'news/detail',
				'job/<id:\d+>' => 'job/detail',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=cup',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
			// @todo 以下两条上线时注释掉
            'enableProfiling' => true, //设置是否在调试中打印sql
            'enableParamLogging' => true, //设置是否打印sql中所用的参数
		),

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

				// array(
				// 	'class'=>'CWebLogRoute',
				// ),

			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'session_timeout' => '300',
	),
);