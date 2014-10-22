<?php
return array(
	//'配置项'=>'配置值'
	//'配置项'=>'配置值'
//数据库配置信息
'DB_TYPE'   => 'mysql', // 数据库类型
'DB_HOST'   => '127.0.0.1', // 服务器地址
'DB_NAME'   => '99m', // 数据库名
'DB_USER'   => 'root', // 用户名
'DB_PWD'    => '', // 密码
'DB_PORT'   => 3306, // 端口
'DB_PREFIX' => 'tp_', // 数据库表前缀 
'DB_CHARSET'=> 'utf8', // 字符集

'TMPL_PARSE_STRING' => array(
        //'__STATIC__' => __ROOT__ . '/Public/Static',
        //'__ADDONS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/Addons',
        //'__IMG__'    => __ROOT__ . '/Public/Img',
        //'__CSS__'    => __ROOT__ . '/Public/Css',
        //'__JS__'     => __ROOT__ . '/Public/Js',

		//调用本地
		'__BSCSS__'		=> __ROOT__ .'/Public/bootstrap-3.2.0-dist/css/bootstrap.min.css',
		'__BSTHEME__'	=> __ROOT__ .'/Public/bootstrap-3.2.0-dist/css/bootstrap-theme.min.css',
		'__JQUERY__'	=> __ROOT__ .'/Public/jquery/1.11.1/jquery.min.js',
		'__BSJS__'		=> __ROOT__ .'/Public/bootstrap-3.2.0-dist/js/bootstrap.min.js',
		
		//使用CDN上的连接,公布数据的时候方便
		//'__BSCSS__'	=> 'http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css',
		//'__BSTHEME__'	=> 'http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css',
		//'__JQUERY__'	=> 'http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js',
		//'__BSJS__'	=> 'http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js',
		),

);