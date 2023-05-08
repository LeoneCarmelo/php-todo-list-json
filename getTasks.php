<?php 

$tasksJsonString = file_get_contents('tasks.json');

header('Content-Type: application/json');
echo $tasksJsonString;