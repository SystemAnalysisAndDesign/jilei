<?php
/*
 * index.php的模板文件
 * 需要的数据：
 * $types
 * $universities
 * $items
 */
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<title>鸡肋网</title>
<link rel="stylesheet" href="static/css/main.css?t=<?= rand(); ?>" />
<link rel="stylesheet" href="static/css/header.css?t=<?= rand(); ?>" />
</head>
<body>
<?php require 'header.html.php';?>
<div id="items">
<?php foreach($items as $item) {?>
	<div class="item">
		<a href="details.php?id=<?= $item["id"] ?>"><img class="item-icon" src=<?= "thumb/".$item["thumb"].".jpg"?> /></a>
		<div class="item-text">
			<div class="item-title"><a href="details.php?id=<?= $item["id"] ?>"><?= $item["title"]?></a></div>
			<div class="item-school"><?= $universities[$item["university"]]["name"]?></div>
			<div class="item-date"><?= date("Y-m-d H:i:s", $item["timestamp"])?></div>
		</div>
	</div>
<?php }?>
</div>
</body>
</html>