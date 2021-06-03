<?php

function getUsers(){

    
    $usersFile = file_get_contents("test-data.json");
    return json_decode($usersFile, true);
 

}

function getUserByMail($mail)
{
    $users = getUsers();
    foreach ($users as $user){
        if ($user['mail'] ==$mail){
            return $user;
        }
    
    }
    return null;
}

function createUser($data) {

}

function updateUser($data, $mail){

}

function deleteUser($mail){

}


?>