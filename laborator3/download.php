<?php
    if(isset($_GET['file'])){
        if(file_exists("public/".$_GET['file'])){
            $file = "public/".$_GET['file'];
            $mime = mime_content_type($file);
            header('Content-Description: File Transfer');
            header('Content-Type: '.$mime);
            header('Content-Disposition: attachment; filename="'.$_GET['file'].'"');
            header('Content-Length: '.filesize($file));
            readfile($file);
            header('location:index.php');
        }
    }
?>