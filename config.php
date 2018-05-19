<?php
define("HOST","localhost");
define("DB","m1");
define("USER","buster");
define("PASS","godnessKali_253690");
define("CHARSET","utf8");
$dsn = "mysql:host=".HOST.";dbname=".DB.";charset=".CHARSET;
$opt = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, USER, PASS, $opt);
?>