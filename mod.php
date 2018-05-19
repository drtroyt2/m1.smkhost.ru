<pre>
<?php
include_once('config.php');
$q = "SELECT * FROM questions";
$s = $pdo->prepare($q);
$s->execute();
$r = $s->fetchAll();
foreach($r as $item){
	$x = $item['question'];
	$p = "/\(([0-9]*)\)/is";
	$m1 = preg_match($p,$x,$m);
	if($m[1]!=NULL){
	$q = "UPDATE questions SET number=".$m[1]." WHERE id=".$item['id'];
//	echo $q.'<br>';
	$s = $pdo->prepare($q);
	$s->execute();
	}
	//var_dump($m[1]);
}
//echo'done';
//echo'<pre>';
//var_dump($r);
/*
$x = "Определение реляцоинности (222)";
$p = "/\((.*)\)/is";
$m1 = preg_match($p,$x,$m);
var_dump($m[1]);//*/
?>