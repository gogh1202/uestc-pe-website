<?php

	$host_name = "localhost";
 	$mysql_account = "root";
 	$passwd = "123456";

 	@mysql_connect($host_name, $mysql_account, $passwd) or die("cannot connect mysql server...");
	@mysql_select_db("academy") or die("database access error!");
	mysql_query("set names 'utf8'");

?> 