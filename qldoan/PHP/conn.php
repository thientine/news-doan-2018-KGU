<?php
$HOST = "localhost";
$USER = "root";
$PASS = "";
$DB = "tintucdoan";
$ERROR1 = "Loi mysql";
$ERROR2 = "Loi DB";
$con = mysqli_connect($HOST, $USER, $PASS) or die($ERROR1);
@mysqli_select_db($con, $DB) or die($ERROR2);
mysqli_set_charset($con, 'UTF8');
@mysqli_query("SET NAMES 'utf8'");
date_default_timezone_set('Asia/Ho_Chi_Minh');

?>