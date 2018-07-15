<?php
$file = "File.pdf";
header("content-type:application/force-download");
header("content-disposition:attachment; filename=\"".$file);
readfile("$file");
?>