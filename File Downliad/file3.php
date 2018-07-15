<?php
$file = "File.docx";
header("content-type:application/force-download");
header("content-disposition:attachment; filename=\"".$file);
readfile("$file");
?>