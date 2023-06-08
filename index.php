<?php
include_once __DIR__ . '/assets/functions.php'
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>

</head>

<body>
    <div class="container">
        <h1 class="text-center pb-3">Strong Password generator</h1>

        <div class="card">
            <div class="card-body">
                <form action="" method="get" class="d-flex justify-content-between">
                    <label for="password">Lunghezza password:</label>
                    <input type="number" class="form-control w-50" id="password" name="password" placeholder="Inserisci un numero...">

                    <button type="submit" class="btn btn-primary">Genera</button>
                </form>

                <h2 class="text-center pt-3"><?= $password; ?></h2>
            </div>
        </div>
    </div>
</body>

</html>