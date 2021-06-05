<?php
function getUsers(){
    $usersFile = file_get_contents("./users/test-data.json");
    return json_decode($usersFile, true);
}

function getUserById($userId)
{
    $users = getUsers();
    foreach ($users as $user){
        if ($user['id'] ==$userId){
            return $user;
        }
    }
    return null;
}

function createUser($data) {
    $users = getUsers();

    $data['id']= rand(1000000, 2000000 );

    $users[] = $data;

    putJson($users);
    
    return $data;


}

function updateUser($data, $userId)
{
    $updateUser =[];
    $users = getUsers();
    foreach ($users as $i => $user){
        if ($user['id'] == $userId) {
            $users[$i] = $updateUser = array_merge($user, $data);
        }
    }
    //  echo '<pre>';
    //  var_dump($users);
    //  echo '</pre>';

    
    file_put_contents('./users/test-data.json', json_encode($users, JSON_PRETTY_PRINT));

    putJson($users);

    return $updateUser;
}

function deleteUser($userId){

}

 function uploadImage($file, $user){

    if (isset($_FILES['userfile']) && $_FILES['userfile']['name']) {

        if(!is_dir(__DIR__."/images")){
            mkdir(__DIR__."/images");
        }
        //OBTENER EXTENSION DEL ARCHIVO
        $fileName = $file['name'];
        $dotPosition = strpos($fileName,'.');
        $extension = substr($fileName, $dotPosition + 1);


        //SUBE EL ARCHIVO A LA CARPETA
        move_uploaded_file($file['tmp_name'] , __DIR__."/images/${user['id']}.$extension");
        $user['extension'] = $extension;
        updateUser($user, $user['id']);
    }

 }



function putJson($users){

    file_put_contents('./users/test-data.json', json_encode($users, JSON_PRETTY_PRINT));
}




?>