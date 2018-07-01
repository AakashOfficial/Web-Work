<?php    
    $dir = ".";//"path/to/targetFiles";
    $dirNew = "viejo2014";//path/to/destination/files
    // Open a known directory, and proceed to read its contents
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
            echo '<br>Archivo: '.$file;
            //exclude unwanted 
            if ($file=="move.php")continue;
            if ($file==".") continue;
            if ($file=="..")continue;
            if ($file=="viejo2014")continue;
            if ($file=="viejo2013")continue;
            if ($file=="cgi-bin")continue;
            //if ($file=="index.php") continue; for example if you have index.php in the folder
            if (rename($dir.'/'.$file,$dirNew.'/'.$file))
                {
                echo " Files Copyed Successfully";
                echo ": $dirNew/$file"; 
                //if files you are moving are images you can print it from 
                //new folder to be sure they are there 
                }
                else {echo "File Not Copy";}
            }
            closedir($dh);
        }
    }
    ?>