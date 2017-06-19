<?php
namespace App\Models\Library;

class ForgottenPasswordModel
{
    
    private $email;

    public function __construct($email)
    {
        $this->email=$email;
    }

   

    public function forgottenpassword(){
        if($this->checkIfEmailExists() == false){
            return false;
        }
        if($this->checkIfEmpty() ==  false){
            return false;
        }

        return true;
    }

    public function checkIfEmailExists()
    {
        $app = \Yee\Yee::getInstance();
        
        $userData = $app->db['default']->where("email", $this->email)->getOne ("logintable");

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

    public function checkIfEmpty(){

        if(empty($this->email)){
            return false;
        }
        return true;
    }

    // public function generatepass(){

    //     if($this->forgottenpassword() ==  true){


    //         $str = "0123456789qwertyuiopppasdfg";
    //         $str = str_shuffle($str);
    //         $str = substr($str, 0 , 10);
    //         $url = "http://desi.dev/resetpassword?token=$str&$this->receiver";

    //         $headers = "From: <" . $this->sender . ">" . "\r\n";

    //         mail($this->receiver, "Reset Password", "To reset your password ,please visit this link : $url", $headers);

    //     }
    // }
}