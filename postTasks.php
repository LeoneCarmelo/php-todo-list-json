<?php

#var_dump($_POST);
if(isset($_POST['newTask'])) {
    $task = $_POST['newTask'];

    //read the json
    $tasks_string = file_get_contents('tasks.json');

    //converted to an associatie array
    $tasksArray = json_decode($tasks_string, true);

    //push the task in the array
    array_unshift($tasksArray, $task);

    //convert the array in json string
    $newTasksJsonString = json_encode($tasksArray);

    //replace the file content
    file_put_contents('tasks.json', $newTasksJsonString);

    //add header application/json
    header('Content-Type: application/json');

    //echo json
    echo $newTasksJsonString;
}