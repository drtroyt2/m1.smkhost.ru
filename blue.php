<?php
include_once('config.php');
$id = $_POST['id'];
$estimate = $_POST['estimate']*1;
//var_dump($estimate);
$estimate = $estimate+1;
//var_dump($estimate);
$date = date('Y-m-d');
$s = $pdo->prepare("UPDATE questions SET estimate = ?, when_ask = '$date'  WHERE id = ?");
$s->bindValue(1,$estimate);
$s->bindValue(2,$id);
$s->execute();
$server = $_SERVER["HTTP_USER_AGENT"];
$is_mobile = stripos($server,'tele');
$limit = 1;

if(false){
	$mob_cond = " WHERE is_mobile=1 ";
}
else $mob_cond = NULL;
$date = date('Y-m-d');
$s = $pdo->prepare("SELECT * FROM questions ".$mob_cond." WHERE estimate<5 AND `when_ask` < '$date' ORDER BY estimate ASC LIMIT ? ");
$s->bindValue(1,$limit);
$s->execute();
$result = $s->fetchAll();
if(count($result)==0){
	$to_view['is_end']=1;
}
else{
	$to_view = $result[0];
	$to_view['is_end']=0;
	$s = $pdo->prepare('SELECT count(*) FROM questions  WHERE estimate<2');
	$s->execute();
	$result = $s->fetchAll();
	$to_view['uno'] = $result[0]["count(*)"];
	$s = $pdo->prepare('SELECT count(*) FROM questions  WHERE estimate=2');
	$s->execute();
	$result = $s->fetchAll();
	$to_view['dos'] = $result[0]["count(*)"];
	$s = $pdo->prepare('SELECT count(*) FROM questions  WHERE estimate=3');
	$s->execute();
	$result = $s->fetchAll();
	$to_view['tres'] = $result[0]["count(*)"];
	$s = $pdo->prepare('SELECT count(*) FROM questions  WHERE estimate=4');
	$s->execute();
	$result = $s->fetchAll();
	$to_view['quadro'] = $result[0]["count(*)"];
	$s = $pdo->prepare('SELECT count(*) FROM questions  WHERE estimate>4');
	$s->execute();
	$result = $s->fetchAll();
	$to_view['cinco'] = $result[0]["count(*)"];
	$s = $pdo->prepare('SELECT count(*) FROM questions  WHERE `when_ask` < \''.$date.'\' AND estimate<5');
	$s->execute();
	$result = $s->fetchAll();
	$to_view['summa'] = $result[0]["count(*)"];
	//var_dump($to_view);
}
echo json_encode($to_view);
//var_dump($_POST);
?>