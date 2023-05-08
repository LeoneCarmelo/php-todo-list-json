<?php
/*
This file is the API Post
if this file receive a call from the app.js  then we do(--see-below--)
*/
#var_dump($_POST);
// if the newTask property has been set then we save it in a variable
if(isset($_POST['newTask'])) {
    $task = $_POST['newTask'];

    //the we get the data from the json
    $tasks_string = file_get_contents('tasks.json');

    //convert the string to an associative array
    $tasksArray = json_decode($tasks_string, true);

    //push the task in the array
    array_unshift($tasksArray, $task);

    //convert the array in json string
    $newTasksJsonString = json_encode($tasksArray);

    //replace the file content inside the json
    file_put_contents('tasks.json', $newTasksJsonString);

    //add header application/json
    header('Content-Type: application/json');

    //echo json
    echo $newTasksJsonString;
}