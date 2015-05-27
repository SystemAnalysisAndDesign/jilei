<?php
/*
 * index.php的模板文件
 * 需要的数据：
 * $universities
 * $items
 */
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>鸡肋网</title>
<link rel="stylesheet" href="static/css/main.css" />
<link rel="stylesheet" href="static/css/header.css" />
</head>
<body>
<?php require 'header.html.php';?>
<div id="items">
<?php foreach($items as $item) {?>
	<div class="item">
		<img class="item-icon" src=<?= "thumb/".$item["thumb"].".jpg"?> />
		<div class="item-text">
			<div class="item-title"><?= $item["title"]?></div>
			<div class="item-school"><?= $universities[$item["university"]]["name"]?></div>
			<div class="item-date"><?= date("Y-m-d H:i:s", $item["timestamp"])?></div>
		</div>
	</div>
<?php }?>
</div>
</body>
</html>