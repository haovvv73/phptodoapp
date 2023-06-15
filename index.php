<?php
include "./component/head.php"
?>

<?php
    include "./config/connectingDB.php";
    include "./model/userdetail.php";
    include "./service/service.php";

    // global function
    function cleardt($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // validate var
    $ID_form = $firstname_form = $lastname_form = $email_form = $freEmail_form = $password_form = $birthday_form = $gender_form = "";
    $err1 = $err2 = $err3 = $err4 = $err5 = $err6 = $err7 = null;
    // update var
    $isUpdateForm = false;
    $upUser = null;
    $errup1 = $errup2 = $errup3 = $errup5 = $errup6 = $errup7 = null;

    // case ADD
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["order_form"] == "ADD"){
        $isCheck = true;
        $firstname_form = cleardt($_POST["firstname_form"]);
        $lastname_form = cleardt($_POST["lastname_form"]);
        $email_form = cleardt($_POST["email_form"]);
        $freEmail_form = cleardt($_POST["freEmail_form"]);
        $password_form = cleardt($_POST["password_form"]);
        $birthday_form = cleardt($_POST["birthday_form"]);
        $gender_form = cleardt($_POST["gender_form"]);

        if(empty($firstname_form) || empty($lastname_form) || empty($email_form) || empty($freEmail_form) || empty($password_form) ||
        empty($birthday_form) || empty($gender_form)){
            $isCheck &= false;
            if(empty($firstname_form)) $err1 = "Khong duoc de trong";
            if(empty($lastname_form)) $err2 = "Khong duoc de trong";
            if(empty($email_form)) $err3 = "Khong duoc de trong";
            if(empty($freEmail_form)) $err4 = "Khong duoc de trong";
            if(empty($password_form)) $err5 = "Khong duoc de trong";
            if(empty($birthday_form)) $err6 = "Khong duoc de trong";
            if(empty($gender_form)) $err7 = "Khong duoc de trong";
        }

        
        if(strlen($password_form) < 8){
            $isCheck &= false;
            $err5 = "password phai co it nhat 8 ky tu";
        }

        if($freEmail_form !== $email_form){
            $isCheck &= false;
            $err4 = "email khong khop";
        }

        if($isCheck){
        // create new user
            $newgender = $gender_form == "male" ? false : true;
            $newuser = new Userdetail(
            null,
            $firstname_form,
            $lastname_form,
            $email_form,
            $password_form,
            $birthday_form,
            $newgender);
            // add DB
            DB_add($newuser);
        }
    }

    // case DELETE
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["order_form"] == "DELETE"){
        $id = (int)cleardt($_POST["id_delete"]);
        DB_delete($id);
    }

    //case EDIT
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["order_form"] == "EDIT"){
        $id = (int)cleardt($_POST["id_edit"]);
        // get user need update
        $upUser= DB_getUserByID($id); 
        // show form
        $isUpdateForm = true;
    }

    // case UPDATE
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["order_form"] == "UPDATE"){
        $isCheck = true;
        $ID_form = (int)cleardt($_POST["ID_form"]);
        $firstname_form = cleardt($_POST["firstname_form"]);
        $lastname_form = cleardt($_POST["lastname_form"]);
        $email_form = cleardt($_POST["email_form"]);
        $password_form = cleardt($_POST["password_form"]);
        $birthday_form = cleardt($_POST["birthday_form"]);
        $gender_form = cleardt($_POST["gender_form"]);

        if(empty($firstname_form) || empty($lastname_form) || empty($email_form) || empty($password_form) ||
        empty($birthday_form) || empty($gender_form)){
            $isCheck &= false;
            if(empty($firstname_form)) $errup1 = "Khong duoc de trong";
            if(empty($lastname_form)) $errup2 = "Khong duoc de trong";
            if(empty($email_form)) $errup3 = "Khong duoc de trong";
            if(empty($password_form)) $errup5 = "Khong duoc de trong";
            if(empty($birthday_form)) $errup6 = "Khong duoc de trong";
            if(empty($gender_form)) $errup7 = "Khong duoc de trong";
            $isUpdateForm = true;
        }

        if(strlen($password_form) < 8){
            $isCheck &= false;
            $errup5 = "password phai co it nhat 8 ky tu";
            $isUpdateForm = true;
        }

        if($isUpdateForm){
            $upUser = new Userdetail();
            // set old content
            $upUser->set_Id($ID_form);
            $upUser->set_firstName($firstname_form);
            $upUser->set_lastName($lastname_form);
            $upUser->set_email($email_form);
            $upUser->set_password($password_form);
            $upUser->set_birthday($birthday_form);
            $upUser->set_gender($gender_form);
        }

        if($isCheck){
            // create new user
                $newgender = $gender_form == "male" ? false : true;
                
                $newuser = new Userdetail(
                $ID_form,
                $firstname_form,
                $lastname_form,
                $email_form,
                $password_form,
                $birthday_form,
                $newgender);
                // add DB
                DB_update($newuser);
        }
    }

    // exit update form
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["order_form"] == "EXIT"){
        $isUpdateForm = false;
    }

?>

<body class="bg-gradient-to-r from-[#8294C4] to-[#ACB1D6]">
    <div class="w-[95vw] mx-auto p-8" >
        <?php
            // from  
            include "./component/form.php";
            if ($isUpdateForm) {
                include "./component/formupdate.php";
            }
        ?>
        <br>
        <?php
            // table
            $list = DB_getUser();
            include "./component/table.php"
        ?>
    </div>
</body>

<?php
include "./component/foot.php"
?>