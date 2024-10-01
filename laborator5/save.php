<?php
    session_start();
    $users = [];
    $user = [];
    $errors = [];
    $file = "users.json";
    //Validare
    if(empty($_POST['nume'])){
        $errors['nume'] = "Campul nume este gol!";
    } else{
        $user['nume'] = htmlspecialchars($_POST['nume']);
    }
    if(empty($_POST['email'])){
        $errors['email'] = "Campul email este gol";
    } elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Introduceti un email valid!";
    } else{
        $user['email'] = htmlspecialchars($_POST['email']);
    }
    if(empty($_POST['parola'])){
        $errors['parola'] = "Campul parola este gol";
    }elseif(strlen($_POST['parola']) < 8){
        $errors['parola'] = "Parola este mai mica de 8 caractere";
    } else{
        $user['parola'] = password_hash($_POST['parola'], PASSWORD_DEFAULT);
    }
    if(empty($_POST['domiciliu'])){
        $errors['domiciliu'] = "Campul domiciliu este gol!";
    } else{
        $user['domiciliu'] = htmlspecialchars($_POST['domiciliu']);
    }
    if(!isset($_POST['genul'])){
        $errors['genul'] = "Nu a fost selectat campul genul!";
    } else{
        $user['genul'] = htmlspecialchars($_POST['genul']);
    }
    $user['newsletter'] = isset($_POST['newsletter']) ? "Da" : "Nu";
    $user['id'] = uniqid();

    if(!empty($errors)){
        $_SESSION['errors'] = $errors;
        header('location:index.php');
        exit();
    }

    if(file_exists($file)){
        $users = file_get_contents($file);
        $users = json_decode($users, true);
        $users[] = $user;
        file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
    }
    header('location:index.php');
?>