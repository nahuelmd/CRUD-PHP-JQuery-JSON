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

function deleteUser($id){

    $users = getUsers();

    foreach ($users as $i => $user){
        if ($user['id'] == $id ){
            // unset($user[$i]);
            array_splice($users, $i, 1); 
            
        }
    }
    putJson($users); 
    //var_dump($users);
}

function deleteMultiUser($id){
    $users = getUsers();
    foreach($users as $i => $user){
        if ($user['id'] == $id){
        array_splice($users, $i, 1); 
        putJson($users); 
        }
    }
    putJson($users); 
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

function validateUser($user, &$errors){

    $isValid = true;

    //VALIDATION START
    $user = array_merge($user, $_POST);
    

    if (!$user['name']){
        $isValid = false; 
        $errors['name'] = 'Name is required';
    }

    if ($user['mail'] && !filter_var($user['mail'], FILTER_VALIDATE_EMAIL)) {
        $isValid = false; 
        $errors['mail'] = 'Mail is required and must be a valid address';
    }

    if (!$user['company'] || strlen($user['company']) < 2 || strlen($user['company']) > 50){
        $isValid = false; 
        $errors['company'] = 'Company is required and must be more than 2 and less than 50 characters';
    }
    if (!$user['role'] || strlen($user['role']) < 2 || strlen($user['role']) > 50){
        $isValid = false; 
        $errors['role'] = 'Role is required and must be more than 2 and less than 50 characters';
    }

    if (!filter_var($user['profile_rate'], FILTER_VALIDATE_INT)){
        $isValid = false; 
        $errors['profile_rate'] = 'Profile rate is required and must be a number';
    }

    //VALIDATION ENDS

    return $isValid;

}




?>