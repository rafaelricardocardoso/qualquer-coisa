<?php
  define('HOST', 'ec2-34-199-68-114.compute-1.amazonaws.com');
  define('DB', 'd9fcoqnmugldjr');
  define('USER', 'xrkrbvyydwdxvn');
  define('PASS','3cdb9e9c7c3fab31b210167945fa021cb0c426a307a66b54a1c33e173102ce8b');
  define('PORT', '5432');

$salt = "test";

$dsn = "pgsql:port=".PORT.";dbname=".DB.";user=".USER.";password=".PASS.";host=".HOST;
	$conexao = new PDO($dsn);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);







?>