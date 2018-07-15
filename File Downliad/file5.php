<?php
$file = "File.mp4";
header("content-type:application/force-download");
header("content-disposition:attachment; filename=\"".$file);
readfile("$file");
?>