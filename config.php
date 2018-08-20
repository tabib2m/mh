<?php
$_CONFIG=array(	'siteTitle'=>'سامانه مدیریت محتوای سمح',
				'siteAddress'=>'http://localhost/smh/',
				'siteRoot'=>$_SERVER['DOCUMENT_ROOT'].'/smh',
				'ftp_host'=>'',
				'ftp_user'=>'',
				'ftp_pass'=>'',
				'db_host'=>'localhost',
				'db_user'=>'root',
				'db_pass'=>'',
				'db_name'=>'smh',
			   	'defaultTimezone'=>'Asia/Tehran',
			   	'saveLoginExpireAfter'=>2*7*24*60*60, //tow weeks
				);

$fullDateFormat = new IntlDateFormatter( "fa-FA@calendar=persian" ,IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT, 'Asia/Tehran',IntlDateFormatter::TRADITIONAL );
$fullDateFormat->setPattern("EEEE d MMMM Y - ساعت h:m a");
?>