<?php
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST' => 'Index,Admin',
	'DEFAULT_GROUP' => 'Index',
	
	'TMPL_FILE_DEPR' => '_',
	'DEFAULT_FILTER' => 'htmlspecialchars',
		
	'TMPL_PARSE_STRING' =>array(
		'__PUBLIC__' => __ROOT__.'/Public/'	,
		
		//数据库设置
		'DB_TYPE'               => 'mysql',     // 数据库类型
		'DB_HOST'               => 'localhost', // 服务器地址
		'DB_NAME'               => 'type',          // 数据库名
		'DB_USER'               => 'root',      // 用户名
		'DB_PWD'                => '',          // 密码
		'DB_PREFIX'				=> '',
		'DB_CHARSET'=>'UTF-8',
	)
);
?>