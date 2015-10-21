<?php
return array(
	'BACKEND_NAME'        => '思南青年之声后台管理系统',
    'USER_AUTH_KEY'       => 'mid',
    'USER_AUTH_GATEWAY'   => 'Login/index',
    'UPLOAD_PATH'         => 'Upload/',
    'UPLOAD_IMG_EXTS'     => array('jpg', 'jpeg', 'gif', 'png'), 
    
    //缩略图尺寸配置， 健值为编号1-100广告位，101-200文章 201-300服务联盟如：1 => array(width, height)
    "THUMB_SIZE"          => array( 
		1                 => array(520, 295),      //1号广告位
        101               => array(225, 152),      //同心同声
        201               => array(120, 120),      //服务联盟二维码
        202               => array(290, 210),     //服务联盟相册
    ),      				 
);