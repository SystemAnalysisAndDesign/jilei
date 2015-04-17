<?php
/*
 * 网站首页
 * 数据由controller/index.control.php生成，由template/index.html.php表现
 * 数据约定：
 * 
 */

$config = require 'config.php';

if ($config["TEST"] === TRUE)
	require 'test/index.test.php';
else
	require 'controller/index.control.php';

require 'template/index.html.php';