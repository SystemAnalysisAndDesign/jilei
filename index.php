<?php
/*
 * 网站首页
 * 数据由controller/index.control.php生成，由template/index.html.php表现
 * 数据格式：
 * $universities = array(
 * 0 => array("name" => "SYSU"),
 * ...
 * )
 *
 * $items = array(
 * 0 => array("id" => 0, "title" => "Title", "university" => 0, "timestamp" => 0, "thumb" => "thumb"),
 * ...
 * )
 *
 * $types = array(
 * 0 => array("name" => "Electronics"),
 * ...
 * )
 */
$config = require "config.php";
$universities = require "universities.php";
$types = require "types.php";

$_university = isset($_GET["university"]) ? $_GET["university"] : "";
$_type = isset($_GET["type"]) ? $_GET["type"] : "";

$title = "";
$items = array ();

if ($config ["TEST"] === TRUE)
	require "test/index.test.php";
else
	require "controller/index.control.php";

require "template/index.html.php";