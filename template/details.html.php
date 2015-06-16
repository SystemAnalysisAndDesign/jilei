<?php
/*
 * details.php的模板文件
 * 需要的数据：
 * $types
 * $universities
 * $item
 */
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<title>鸡肋网</title>
<link rel="stylesheet" href="static/css/details.css?t=<?= rand(); ?>" />
<link rel="stylesheet" href="static/css/header.css?t=<?= rand(); ?>" />
</head>
<body>
<?php require 'header.html.php';?>
<div id="items">
<div>
	<div>名称：<?= $item["title"] ?></div>
	<div>详情：<?= $item["description"] ?></div>
	<div>类别：<?= $types[$item["type"]]["name"] ?></div>
	<div>学校：<?= $universities[$item["university"]]["name"] ?></div>
	<div>联系方式：<?= $item["contact"] ?></div>
	<div>发布时间：<?= date("Y-m-d H:i:s", $item["timestamp"]) ?></div>
</div>
<div id="pictures">
<?php foreach ($item["pictures"] as $src) { ?>
	<img src="picture/<?= $src ?>" />
<?php } ?>
</div>
</div>
</body>
</html>