<?php
include 'script.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div id="app">
        <div class="container">
            <h1 class="text-center">{{ message }}</h1>
            <ul class="list-group w-50 mx-auto">
                <li class="list-group-item d-flex justify-content-between">
                    <span>An item</span>
                    <i class="fa-solid fa-trash mt-1" style="color: #ff0000;"></i>
                </li>
            </ul>
            <div class="input-group mb-3 w-50 mx-auto my-3">
                <input type="text" class="form-control" placeholder="Inserisci elemento..."
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Inserisci</button>
            </div>

        </div>
    </div>



    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="app.js"></script>
</body>

</html>