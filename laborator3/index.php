<?php
    $imagini = scandir('public');
    $imagini = array_diff($imagini, [".", ".."]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h4 class="my-4">Incarcare fisiere</h4>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="file">Incarca fisierul</label>
                <input type="file" name="file" id="file" class="form-control" require>
            </div>
            <button type="submit" class="btn btn-dark">Save</button>
        </form>
    </div>
    <div class="container py-3">
        <h4 class="my-3">Lista imaginilor din sistem</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Imagine</th>
                    <th>Optiuni</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($imagini as $imagine): ?>
                    <tr>
                        <td>
                            <img src="public/<?=$imagine;?>" alt="Imagine" class="col-1">
                        </td>
                        <td class="d-flex flex-column">
                            <a  href="delete.php?file=<?=$imagine?>"
                                class="text-danger"
                                onclick="return confirm('Esti sigur?');">
                                Delete</a>
                            <a  href="public/<?=$imagine?>"
                                class="text-info"
                                target="_blanck">
                                Afisare</a>
                            <a  href="download.php?file=<?=$imagine?>"
                                class="text-success">
                                Download</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>