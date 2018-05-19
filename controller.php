<?php
include_once('config.php');
$server = $_SERVER["HTTP_USER_AGENT"];
$is_mobile = stripos($server,'tele');
$limit = 1;
if(false){
	$mob_cond = " is_mobile=1 AND ";
}
else $mob_cond = NULL;
$date = date('Y-m-d');
echo"<p>$date</p>";
$s = $pdo->prepare("SELECT * FROM questions  WHERE ".$mob_cond." estimate<5 AND `when_ask` < '$date' ORDER BY estimate ASC LIMIT ? ");
$s->bindValue(1,$limit);
$s->execute();
$result = $s->fetchAll();
if(count($result)==0){
	$question = "Заданий нет";
	$class = ' style="display:none;"';
}
else{
	$question = $result[0]['question'];
}
$id = $result[0]['id'];
$estimate = $result[0]["estimate"];
$number = $result[0]["number"];
$s = $pdo->prepare('SELECT count(*) FROM questions  WHERE estimate<2');
$s->execute();
$result = $s->fetchAll();
$uno = $result[0]["count(*)"];
$s = $pdo->prepare('SELECT count(*) FROM questions  WHERE estimate=2');
$s->execute();
$result = $s->fetchAll();
$dos = $result[0]["count(*)"];
$s = $pdo->prepare('SELECT count(*) FROM questions  WHERE estimate=3');
$s->execute();
$result = $s->fetchAll();
$tres = $result[0]["count(*)"];
$s = $pdo->prepare('SELECT count(*) FROM questions  WHERE estimate=4');
$s->execute();
$result = $s->fetchAll();
$quadro = $result[0]["count(*)"];
$s = $pdo->prepare('SELECT count(*) FROM questions  WHERE estimate>4');
$s->execute();
$result = $s->fetchAll();
$cinco = $result[0]["count(*)"];
$s = $pdo->prepare('SELECT count(*) FROM questions  WHERE `when_ask` < \''.$date.'\' AND estimate<5');
$s->execute();
$result = $s->fetchAll();
$summa = $result[0]["count(*)"];
?>