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
</head>
<body>
<?php
require 'header.html.php';
?>
	<div id="list">
		<div class="list-item">
			<img class="item-icon" />
			<div class="item-text">
				<div class="item-title">Title</div>
				<div class="item-school">School</div>
				<div class="item-date">Date</div>
			</div>
		</div>
		<div class="list-item">
			<img class="item-icon" />
			<div class="item-text">
				<div class="item-title">Title</div>
				<div class="item-school">School</div>
				<div class="item-date">Date</div>
			</div>
		</div>
	</div>
</body>
</html>