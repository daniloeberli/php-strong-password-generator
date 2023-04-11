<?php

$prova = $_POST["number"] ?? "";

function generatePassword($number)
{

    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890,.*+#%()[]{}';
    $myArray = [];

    for ($i = 0; $i < $number; $i++) {

        $x = rand(0, strlen($chars) - 1);

        $myArray[] = $chars[$x];
    }
    return implode($myArray); // array to string
}
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
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="number" class="form-label">Lunghezza Password</label>
                <input type="number" class="form-control" name="number" id="number">
            </div>

            <button type="submit">Invia</button>
            <button type="reset">Reset</button>
        </form>

        <?php
            $password = generatePassword($prova);

            echo $password;
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>