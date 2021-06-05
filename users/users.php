<?php
function getUsers(){
    $usersFile = file_get_contents("./users/test-data.json");
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

function updateUser($data, $mail)
{
    $updateUser =[];
    $users = getUsers();
    foreach ($users as $i => $user){
        if ($user['mail'] == $mail) {

            $users[$i] = $updateUser = array_merge($user, $data);
        }
    }
    //  echo '<pre>';
    //  var_dump($users);
    //  echo '</pre>';

    $cambio = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents('./users/test-data.json', $cambio);

    return $updateUser;
}

function deleteUser($mail){

}

function uploadImage(){


}








?>