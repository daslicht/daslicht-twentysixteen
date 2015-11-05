<?php

$dir    = './media-queries';
$files1 = scandir($dir);

foreach ($files1 as $key => $value) {
	echo $value . "<br>";
}