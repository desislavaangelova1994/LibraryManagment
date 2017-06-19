<?php
namespace App\Models\Library;

class SignUpModel
{

	private $firstname;
    private $lastname;
	private $password;
    private $email;

	public function __construct( $firstname, $lastname, $password, $email ){
		$this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
		$this->email = $email;
	}

    public function checkfirstname($firstname) 
    {  
    	//Checks if it is a blank space
    	if(empty( $this->firstname )){
    		return false;
    	}
    	return true;

    }
    public function checklastname($lastname) 
    {  
        //Checks if it is a blank space
        if(empty($this->lastname)){
            return false;
        }
        return true;

    }
    public function checkEmail($email) 
    {  
    	//Checks if the Email is real

    	if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
    		return false;
    	}
    	if(empty($this->email)){
    		return false;
    	}
    		return true;    	

    }

    public function checkPassword($password)
    {
    	if(empty($this->password)){
    		return false;
    	}
    	return true;
    }

    // public function insertUserTable(){
    	
    // 	$app = \Yee\Yee::getInstance();

    //     $data = Array(
    // 			'first_name' => $this->firstname,
   	// 			'last_name' => $this->lastname
    // 			);

    //     $app->db['default']->insert('userstable', $data);

    // }

    public function insertLoginTable(){
        
        $app = \Yee\Yee::getInstance();

        $data = Array(
                'email' => $this->email,
                'password' => password_hash($this->password,PASSWORD_DEFAULT),
                'access_level' => "admin"
                );

        $app->db['default']->insert('logintable', $data);
    }
}