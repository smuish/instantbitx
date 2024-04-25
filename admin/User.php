<?php 

class User{

    public function newUser($data){

        $user = mysqli_query($GLOBALS['con'], "INSERT INTO user (username, email, password, dateAdded, role, status, avatar) VALUES('$data->username' , '$data->email', PASSWORD('$data->password'), NOW(), '$data->role', 0, '$data->avatar')") or die(mysqli_error($GLOBAL['con']));
        return;

    }

    public function login($data){

        $sn = mysqli_query($GLOBALS['con'],"SELECT * FROM user where userName  = '$data->username' AND password = PASSWORD('$data->password')") or die(mysqli_error($GLOBALS['con']));
        $a_sn = mysqli_affected_rows($GLOBALS['con']);
        if($a_sn > 0){
            return $sn;
        }else{
            return "false";
        }
    }

    public function getUserList(){

        $userlist = mysqli_query($GLOBALS['con'], "SELECT * FROM user");
        return $userlist;
    }

    public function updateUser($user){

       $updateuser = mysqli_query($GLOBALS['con'], "UPDATE user SET username = '$user->username', email = '$user->email', password = '$user->password', role = '$user->role', '$user->avatar'") or die(mysqli_error($GLOBALS['con']));
        return;
    }

    public function deleteUser($user){

        mysqli_query($GLOBALS['con'], "DELETE FROM user WHERE id = '$user");
        return;
    }
}