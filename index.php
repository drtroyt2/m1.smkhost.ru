<!DOCTYPE html>
<html>
	<head>
		<script src="/js/jquery.js"></script>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
		<script src="/bootstrap/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/css/main.css">
	</head>
	<body>
		<?php
		include_once('controller.php');
		?>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-8 estimates">
					<div class="row">
						<p class="cinco">5:<?=$cinco?></p>
						<p class="quadro">4:<?=$quadro?></p>
						<p class="tres">3:<?=$tres?></p>
						<p class="dos">2:<?=$dos?></p>
						<p class="uno">1:<?=$uno?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div id="field-quest" class="question" attr1="<?php echo $id;?>" attr2="<?php echo $estimate;?>">
					<p><span id="field-quest-p"><?php echo $question;?></span></p>
					<p>Number:<span id="numero"><?php echo $number;?></span></p>
					<p>Estimate:<span class="current-estimate"><?php echo $estimate;?></span></p>
					<p>Left:<span class="is_left"><?php echo $summa;?></span></p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6 for-btn">
					<div class="row">
						<button type="button" class="btn btn-danger btn-lg red-but" <?=$class?>>Primary</button>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 for-btn">
					<div class="row">
						<button type="button" class="btn btn-primary btn-lg blue-but" <?=$class?>>Primary</button>
					</div>
				</div>
			</div>
		</div>
		<script src="/js/main.js"></script>
	</body>
</html>
<?php
					//var_dump($_SERVER ["HTTP_USER_AGENT"]);
				?>