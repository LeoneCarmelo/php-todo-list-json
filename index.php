<?php
include 'script.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700;800&family=Outfit:wght@400;700&family=Roboto+Condensed:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div id="app">
        <div class="container">
            <h1 class="text-center py-4">{{ message }}</h1>
            <ul class="list-group w-50 mx-auto">
                <li class="list-group-item d-flex justify-content-between position-relative" v-for="(task, index) in tasks">
                    <span :class="task.done ? 'lineThrough' : ''" @click="cutTask(index)">{{task.language}}</span>
                    <div class="trash_container position-absolute" @click="removeTask(index)">
                        <div class="wrap position-relative">
                            <div class="cover position-absolute"></div>
                            <div class="bucket"></div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="input-group mb-3 w-50 mx-auto my-3">
                <input @keyup.enter="addTask" type="text" class="form-control" placeholder="Inserisci elemento..."
                    aria-label="Recipient's username" aria-describedby="button-addon2" v-model="newTask">
                <button class="btn" type="button" id="button-addon2" @click="addTask">Inserisci</button>
            </div>

        </div>
    </div>


    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="app.js"></script>
</body>

</html>