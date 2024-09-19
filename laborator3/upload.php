<?php
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        if( isset($_FILES['file']) ){
            $errors = [];
            if( !is_dir('public') ){
                mkdir('public');
            }
            $file_name = $_FILES['file']['name'];
            $file_type = $_FILES['file']['type'];
            $file_tmp_name = $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_error = $_FILES['file']['error'];
            $errors[] =  $file_error;
            $extensii = ["jpg", "jpeg", "png", "gif", "webp"];
            //Extenisa fisierului
            $file_ext = pathinfo(basename($file_name), PATHINFO_EXTENSION);
            if(!in_array($file_ext, $extensii )){
                die("Acest fisier nu este permis.");
            }
            if($file_size > 1 * 1024 * 1024){
                die("Nu se permite incarcarea fisierlor mai mari decat 1 MB.");
            }
            //Nume unic al fisierului pentru viitor 
            $nume_unic = uniqid('img_', true) . "." . $file_ext;
            $patch = 'public/' . $nume_unic;
            if( !move_uploaded_file($file_tmp_name, $patch) ){
                $errors[] = "Eroare la incarcare!";
                var_dump($errors);
                die();
            }
            header('location:index.php');
            exit;
        }
    }
?>