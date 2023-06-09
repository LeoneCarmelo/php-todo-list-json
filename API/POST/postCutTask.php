<?php
//var_dump($_POST);
if(isset($_POST['index'])) {
    $index = $_POST['index'];

    //the we get the data from the json
    $tasks_string = file_get_contents('../tasks.json');

    //convert the string to an associative array
    $tasksArray = json_decode($tasks_string, true);
    //var_dump($tasksArray[0]["done"]);
    //Change the done property
    $tasksArray[$index]["done"] = !$tasksArray[$index]["done"];

    //convert the array in json string
    $newTasksJsonString = json_encode($tasksArray);

    //replace the file content inside the json
    file_put_contents('../tasks.json', $newTasksJsonString);

    //add header application/json
    header('Content-Type: application/json');

    //echo json
    echo $newTasksJsonString;
}