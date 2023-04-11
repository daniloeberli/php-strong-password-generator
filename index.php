<?php

$prova = $_POST["number"] ?? "";

include_once __DIR__ . './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP strong password</title>
</head>

<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="number" class="form-label">Lunghezza Password</label>
                <input type="number" min="1" class="form-control" name="number" id="number">
            </div>
            <button type="submit">Invia</button>
            <button type="reset">Reset</button>
        </form>

        <?php
            $password = generatePassword($prova);
        ?>

        <h2>Ecco la tua password di <?php echo $prova;?> caratteri: <?php echo $password;?> </h2> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>