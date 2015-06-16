<?php
/*
 * header的模板文件
 * 需要的数据：
 * $types
 * $universities
 * $_type
 * $_university
 */
?>

<div id="header">
	<h1 id="title"><a href="index.php">鸡肋网</a>——二手交易信息发布平台</h1>
	<ul class="nav">
		<li>
			<div>类别</div>
			<ul>
				<li><a href="index.php?university=<?= $_university ?>>">全部</a></li>
<?php foreach ($types as $type) {?>
				<li><a href="index.php?type=<?= $type["id"] ?>&university=<?= $_university ?>"><?= $type["name"]?></a></li>
<?php }?>
			</ul>
		</li>
		<li>
			<div>学校</div>
			<ul>
				<li><a href="index.php?type=<?= $_type ?>>">全部</li>
<?php foreach ($universities as $university) {?>
				<li><a href="index.php?type=<?= $_type ?>&university=<?= $university["id"] ?>"><?= $university["name"]?></a></li>
<?php }?>
			</ul>
		</li>
	</ul>
</div>
