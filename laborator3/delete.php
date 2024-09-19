<?php
    if(isset($_GET['file'])){
        if( file_exists("public/". $_GET['file'] ) ){
            unlink("public/" . $_GET['file']);
        }
        header('location:index.php');
    }
?>