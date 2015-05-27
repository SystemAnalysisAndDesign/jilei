<?php
/*
 * header的模板文件
 * 需要的数据：
 * $types
 */
?>

<div id="header">
<h1 id="title">鸡肋网——二手交易信息发布平台</h1>
<ul id="navigator">
<?php 
foreach ($types as $type)
	echo "<li>".$type["name"]."</li>"
?>
</ul>
</div>