<?php
session_start();
$file = "users.json";
$users = [];
$i = 0;
if (file_exists($file)) {
    $users = file_get_contents($file);
    $users = json_decode($users, true);
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET['search'])){
            $users = array_filter($users, function($user){
                return stripos($user['nume'], $_GET['search']) !== false;
            });
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Users Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Acasa</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" method="get">
                    <input class="form-control me-2" type="search" placeholder="Cauta" aria-label="Search" name="search">
                    <button class="btn btn-outline-secondary" type="submit">Cauta</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#userForm">
                    Adauga
                </button>
            </div>
        </div>
        <div class="row">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success" role="alert">
                    <?= $_SESSION['success'] ?>
                </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['errors'])): ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach ($_SESSION['errors'] as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php session_unset(); ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Lista utilizatorilor</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nume</th>
                            <th>Email</th>
                            <th>Domiciliul</th>
                            <th>Genul</th>
                            <th>Abonament</th>
                            <th>Optiuni</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= ++$i ?></td>
                                <td><?= $user['nume'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['domiciliu'] ?></td>
                                <td><?= $user['genul'] ?></td>
                                <td><?= $user['newsletter'] ?></td>
                                <td>
                                    <a href="sterge.php?user=<?= $user['id'] ?>" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Esti sigur?');">
                                        Sterge
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="userForm" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Adauga un utilizator</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="save.php" method="post">
                            <div class="mb-3">
                                <label for="nume">Nume</label>
                                <input type="text" name="nume" id="nume" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="parola">Parola</label>
                                <input type="password" name="parola" id="parola" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="domiciliu">Domiciliul</label>
                                <select name="domiciliu" id="domiciliu" class="form-control">
                                    <option value="Chisinau">Chisinau</option>
                                    <option value="Cahul">Cahul</option>
                                    <option value="Balti">Balti</option>
                                    <option value="Soroca">Soroca</option>
                                    <option value="Comrat">Comrat</option>
                                    <option value="Leova">Leova</option>
                                    <option value="Ialoveni">Ialoveni</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="genul">Genul</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genul" id="masculin"
                                        value="Masculin" checked>
                                    <label class="form-check-label" for="masculin">
                                        Masculin
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genul" id="femenin"
                                        value="Femenin">
                                    <label class="form-check-label" for="femenin">
                                        Femenin
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3 border-top">
                                <div class="form-check">
                                    <label class="form-check-label" for="da">
                                        Aboneazate
                                    </label>
                                    <input class="form-check-input" type="checkbox" id="da" name="newsletter">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark btn-sm">Transmite</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>