<?php
    // add
    function DB_add($userDetail){
        global $conn;
        $firstName = $userDetail->get_firstName();
        $lastName = $userDetail->get_lastName();
        $email = $userDetail->get_email();
        $password = $userDetail->get_password();
        $birthday = $userDetail->get_birthday();
        $gender = $userDetail->get_gender();

        mysqli_query($conn,"INSERT INTO userdetail(firstName,lasstName,email,password,birthday,gender) 
        VALUES ('$firstName','$lastName','$email','$password','$birthday','$gender')");
    }

    // delete
    function DB_delete($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM userdetail WHERE ID = $id");
    }

    // update
    function DB_update($userUpdate){
        global $conn;
        $ID = $userUpdate->get_ID();
        $firstName = $userUpdate->get_firstName();
        $lastName = $userUpdate->get_lastName();
        $email = $userUpdate->get_email();
        $password = $userUpdate->get_password();
        $birthday = $userUpdate->get_birthday();
        $gender = $userUpdate->get_gender();

        mysqli_query($conn,"UPDATE userdetail SET firstName = '$firstName', lasstName = '$lastName',email = '$email', password = '$password',birthday = '$birthday', gender = '$gender' WHERE ID = $ID");
    }

    // get
    function DB_getUser(){
        global $conn;
        $result = mysqli_query($conn,"SELECT * FROM userdetail");
        $listuser = array();

        while($row = mysqli_fetch_array($result)) {
            $user = new Userdetail($row["ID"],$row["firstName"],$row["lasstName"],$row["email"],$row["password"],$row["birthday"],$row["gender"]);
            array_push($listuser,$user);
        }

        return $listuser;
    }

    // get user detail by id
    function DB_getUserByID($ID){
        global $conn;
        $result = mysqli_query($conn,"SELECT * FROM userdetail WHERE ID = $ID");
        $user = null ;

        while($row = mysqli_fetch_array($result)) {
            global $user;
            $user = new Userdetail($row["ID"],$row["firstName"],$row["lasstName"],$row["email"],$row["password"],$row["birthday"],$row["gender"]);
        }

        return $user;
    }