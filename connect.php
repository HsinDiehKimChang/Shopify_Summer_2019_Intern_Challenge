
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//Database location
$db_server = "localhost";
//Database
$db_name = "product_list";
//Database Account
$db_user = "root";
//Database Password
$db_passwd = "";
//connect
$db = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);
if(mysqli_connect_errno($db))
//Database can not connect
	echo "Cannot connect to Database(product_list)" . mysqli_connect_error();
mysqli_set_charset($db,'utf8');
//Database can not use
if(!@mysqli_select_db($db,'product_list'))
        die("Database cannot use");
?>
