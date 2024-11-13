<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include "../views/nav/nav.php"; ?>
    <div class="container">
        <div class="row py-3 justify-content-center h5">
            Lista cartilor
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Pages</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($books->count() > 0): ?>
                            <?php foreach($books as $book): ?>
                                <tr>
                                    <td><?=$book->id?></td>    
                                    <td><?=$book->title?></td>    
                                    <td><?=$book->pages?></td>    
                                    <td><?=$book->author?></td>    
                                    <td><?=$book->description?></td>    
                                    <td><?=$book->price?></td>    
                                    <td><?=$book->stock?></td>    
                                    <td>
                                        <a href="/edit/<?= $book->id; ?>" class="btn-warning btn btn-sm">Edit</a>
                                        
                                    </td>    
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8">There are no books in the system!</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>