<?php 
/*
This file is the API Get 
the first step is to create a json file where to define the data

if this file receive a call from the app.js then we put the data inside
the json file and saved in a variable
 */
//get data from json file
$tasksJsonString = file_get_contents('../tasks.json');


//add header appplication/json
header('Content-Type: application/json');
//echo json string
echo $tasksJsonString;