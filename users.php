<?php

function getUsers(){

    
    $usersFile = file_get_contents("test-data.json");
    return json_decode($usersFile, true);
 

}

function getUserByMail($mail){

}

function createUser($data) {

}

function updateUser($data, $mail){

}

function deleteUser($mail){

}


?>