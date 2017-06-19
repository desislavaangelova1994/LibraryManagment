<?php
namespace App\Models\Library;

class SignInModel
{
   

    public function __construct($email,$password){
        
        $this->email = $email;
        $this->password = $password;
    }

    public function login(){
        if($this->getEmail() == true){
            return false;
        }
        if($this->validatePass() ==  false){
            return false;
        }

        return true;
    }
    
    public function getEmail(){
        $app = \Yee\Yee::getInstance();
        $userData = $app->db['default']->where ("email",$this->email)->getOne("logintable");
        

        return $userData == null;
    }

    public function getUsername(){
        $app = \Yee\Yee::getInstance();
        $userData = $app->db['default']->where ("email",$this->email)->getOne("logintable");

        return $userData['firstname'];
    }

    public function getAccess(){
        $app = \Yee\Yee::getInstance();
        $userData = $app->db['default']->where ("email",$this->email)->getOne("logintable");

        return $userData['access_level'];
    }
    public function getID(){
        $app = \Yee\Yee::getInstance();
        $userData = $app->db['default']->where ("email",$this->email)->getOne("logintable");
        $id = $userData['user_id'];

        return $id;
    }



    // CHECKS IF VALUES ARE NULL
    public function checkIfNull(){

        if( !is_null( $this->email ) )
        {
            
            return true;

        } else {
            return false;
        }
    }

    public function validateEmail()
    {
        $app = \Yee\Yee::getInstance();
        $userData = $app->db['default']
            ->where("email", $this->email)
            ->getOne ("logintable");
        // CHECKS IF EMAIL COMPARES TO THE EMAIL IN THE DATABASE
        if($userData['email'] === $this->email)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function validatePass()
    {
        $app=\Yee\Yee::getInstance();
        $userData= $app->db['default']->where("email", $this->email)->getOne("logintable");

        $hash =$userData['password'];
        // ENCRYPTS PASSWORD
        if(password_verify($this->password,$hash))
        {
            return true;
        }
        else
        {
            return false;
        }   
    }
}