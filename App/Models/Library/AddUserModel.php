<?php
namespace App\Models\Library;

class AddUserModel
{

	private $firstname;
    private $lastname;
	private $password;
    private $email;
    private $accesslevel;

	public function __construct( $firstname, $lastname, $password, $email,$accesslevel ){
		$this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
		$this->email = $email;
        $this->accesslevel = $accesslevel;
	}

    // GETS VALUE FOR ACCESS_KEY
    public function getColumnAcess() 
    {  
    	
        $app = \Yee\Yee::getInstance();
        $access = $app->db['default']->getOne ("logintable");
        return $access['access_level'];

    
    }
    // CHECKS IF VALUES ARE EMPTY
    public function checkifempty(){

        if(empty( $this->firstname && $this->lastname && $this->password && $this->email)){
            return false;
        }
        return true;
    }

    public function isNumeric(){

        if(is_numeric($this->firstname)){
            return false;
        }
        return true;
    }

    // INSERTS INTO DATABASE
    public function insertDatabase(){
        
        $app = \Yee\Yee::getInstance();

        $data = Array(
                'email' => $this->email,
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'password' => password_hash($this->password,PASSWORD_DEFAULT),
                'access_level' => $this->accesslevel
                );

        $app->db['default']->insert('logintable', $data);
    }
}