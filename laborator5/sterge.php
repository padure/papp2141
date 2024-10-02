<?php
session_start();
if (isset($_GET['user'])) {
    $user_id = htmlspecialchars($_GET['user']);
    $file = "users.json";
    $users = [];
    if (file_exists($file)) {
        $users = file_get_contents($file);
        $users = json_decode($users, true);
        $users = array_filter($users, function ($user) use ($user_id) {
            return $user['id'] != $user_id;
        });
        file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
        $_SESSION['success'] = "Utlizatorul a fost sters cu succes!";
        header('location:index.php');
    }
}
?>