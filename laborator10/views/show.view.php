<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalii Carte: <?= htmlspecialchars($book->title) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include "../views/nav/nav.php"; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3><?= htmlspecialchars($book->title) ?></h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Autor: <?= htmlspecialchars($book->author) ?></h5>
                        <p><strong>Descriere:</strong></p>
                        <p><?= nl2br(htmlspecialchars($book->description)) ?></p>
                        <p><strong>Pagini:</strong> <?= htmlspecialchars($book->pages) ?></p>
                        <p><strong>Preț:</strong> <?= number_format($book->price, 2) ?> RON</p>
                        <p><strong>Stoc:</strong> <?= htmlspecialchars($book->stock) ?></p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/books" class="btn btn-secondary">Înapoi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>