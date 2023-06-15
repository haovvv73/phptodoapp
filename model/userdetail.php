<?php
class Userdetail
{
    // property
    private $ID;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $birthday; // yyyy-mm-dd
    private $gender; // 0 : male, 1:female

    // METHOD
    function __construct($ID = null, $firstName = null, $lastName = null, $email = null, $password = null, $birthday = null, $gender = null)
    {
        $this->ID = $ID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->birthday = $birthday;
        $this->gender = $gender;
    }

    public function get_ID(){
        return $this->ID;
    }

    public function set_Id($ID){
        return $this->ID = $ID;
    }

    public function get_firstName(){
        return $this->firstName;
    }

    public function set_firstName($firstName){
        $this->firstName = $firstName;
    }

    public function get_lastName(){
        return $this->lastName;
    }

    public function set_lastName($lastName){
        $this->lastName = $lastName;
    }

    public function get_email(){
        return $this->email;
    }

    public function set_email($email){
        return $this->email = $email;
    }

    public function get_password(){
        return $this->password;
    }

    public function set_password($password){
        return $this->password = $password;
    }

    public function get_birthday(){
        return $this->birthday;
    }

    public function set_birthday($birthday){
        return $this->birthday = $birthday;
    }

    public function get_gender(){
        return $this->gender;
    }

    public function set_gender($gender){
        return $this->gender = $gender;
    }
}
