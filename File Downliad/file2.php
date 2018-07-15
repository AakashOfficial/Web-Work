<?php
$file = "File.jpg";
header("content-type:application/force-download");
header("content-disposition:attachment; filename=\"".$file);
readfile("$file");
?>