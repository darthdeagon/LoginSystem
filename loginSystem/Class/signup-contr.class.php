<?php

class SignupContr {

    private $email;
    private $accName;
    private $password;
    private $repassword;

    public function __construct($email, $accName, $password, $repassword)
    {
        $this->email = $email;
        $this->accName = $accName;
        $this->password = $password;
        $this->repassword = $repassword;
    }

    private function emptyInput() {
        $result;
        if(empty($this->email) || empty($this->accName) || empty($this->password) || empty($this->repassword)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function validateUserName() {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->accName)) {
          $result = false;
        }else{
        $result = true;
        }
        return $result;
      }

      private function invalidEmail(){
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
      }

      private function pwdMatch(){
        $result;
        if ($this->password !== $this->repassword){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
      }
}