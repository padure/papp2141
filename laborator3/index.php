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
</body>
</html>