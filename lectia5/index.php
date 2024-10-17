<?php
try {
    $dsn = "mysql:host=localhost;dbname=papp_lectia5";
    $username = "root";
    $password = "";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
    $sql = "SELECT * FROM users";
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Erroare la conexiune. " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 m-auto">
                <form method="POST">
                    <div class="mb-3">
                        <label for="nume_prenume">Nume prenume</label>
                        <input type="text" name="nume_prenume" id="nume_prenume" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="data_nasterii">Data nasterii</label>
                        <input type="date" name="data_nasterii" id="data_nasterii" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="descriere">Descriere</label>
                        <textarea name="descriere" id="descriere" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark btn-sm">Save</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>lista utilizatorilor</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nume, prenume</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data nasterii</th>
                            <th scope="col">Password</th>
                            <th scope="col">Descriere</th>
                            <th scope="col">Optiuni</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?=$user['id']?></td>
                                <td><?=$user['nume_prenume']?></td>
                                <td><?=$user['email']?></td>
                                <td><?=$user['data_nasterii']?></td>
                                <td><?=$user['password']?></td>
                                <td><?=$user['descriere']?></td>
                                <td class="d-flex gap-2">
                                    <a href="" class="text-warning">Edit</a>
                                    <a href="" class="text-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>