<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container">
        <div class="row py-2 justify-content-center h5">
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