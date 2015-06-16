<?php
/*
 * 详情页面
 * 数据由controller/details.control.php生成，由template/details.html.php表现
 * 数据约定：
 * $item = array (
 * "id" => 0,
 * "title" => "Title",
 * "description" => "Description",
 * "type" => 0,
 * "university" => 0,
 * "contact" => "15602332603",
 * "pictures" => array (
 * 0 => "pic0",
 * 1 => "pic1",
 * 2 => "pic2",
 * 3 => "pic3"
 * ),
 * "thumb" => "thumb",
 * "timestamp" => 0,
 * )
 */

$config = require "config.php";
$universities = require "universities.php";
$types = require "types.php";

$_university = isset($_GET["university"]) ? $_GET["university"] : "";
$_type = isset($_GET["type"]) ? $_GET["type"] : "";

if (isset($_GET["id"]))
	$id = $_GET["id"];
else
	die("invalid parameter");

if ($config ["TEST"] === TRUE)
	require "test/details.test.php";
else
	require "controller/details.control.php";

require "template/details.html.php";
