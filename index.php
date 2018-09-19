<?php

require_once('core/functions.inc.php') ;
_3wd_IncludeCore(array('view', 'dbasei') );
_3wd_IncludeCtrl('home');
_3wd_IncludeModel('db_conn');
SetMasterView('master') ;

$link = DB_Connect();
Home_Index(_3wd_Get());

DB_Disconnect($link) ;

?>
