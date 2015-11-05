<?php

$dir    = './';
$files1 = scandir($dir);

foreach ($files1 as $key => $value) {
	echo $value . "<br>";
}