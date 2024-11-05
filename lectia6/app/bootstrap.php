<?php
    require_once "../vendor/autoload.php";

    use App\Model\User;
    use App\Controllers\UserController;

    $user = new User('John Doe', 'jd@gmail.com');
    $response = new UserController();

    echo $user->getInfo() . "<br>";
    echo $response->index() . "<br>";