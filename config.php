<?php 
// require_once('./function/mysql.php');
require_once('function/mysql.php');

/*********** Database Settings ***********/
$dbHost = 'localhost';
$dbName = 'sph'; 


$dbUser = 'u8364183_marketing';
$dbPass = 'PVMMA0Akp4;(';

$passSalt = 'UFqPNrZENKSQc5yc';

//Default database link
error_reporting(E_ALL ^ E_DEPRECATED);
$dbLink = mysql_connect($dbHost,$dbUser,$dbPass, true)or die('Could not connect: ' . mysql_error());
mysql_query("SET NAMES 'UTF8'");

if(!mysql_select_db($dbName,$dbLink))
{
	die('Database Connection Failed!');
}


/*********** Email Settings ***********/
$mailFrom = 'aki';

$mailSupport = 'albaihaqial@gmail.com';

/*********** Display Settings ***********/
$siteTitle = 'Marketing AKI';
$recordPerPage = 10;

$wajibIsiKeterangan ='<font style="color:#FF0000; font-weight:bold">Field Bertanda * Wajib Diisi</font>';
$wajibIsiSimbol = '<font style="color:#FF0000; font-weight:bold">&nbsp;&nbsp;*</font>';
$SITUS = "kopkar.ubaya.ac.id/akuntansi/kobama";
define('CONST_FOLDER', "/var/www/html/kopkar/akuntansi/kobama");
?>