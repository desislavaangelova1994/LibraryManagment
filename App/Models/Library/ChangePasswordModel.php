<?php
namespace App\Models\Library;

class ChangePasswordModel
{
	private $current;
    private $new1;
	private $new2;

	public function __construct( $current, $new1, $new2){
		$this->current = $current;
        $this->new1 = $new1;
        $this->new2 = $new2;
	}

	//Checks if empty
	public function checkifempty(){

        if(empty( $this->current && $this->new1 && $this->new2)){
            return false;
        }
        return true;
    }

    public function checkscurrentpass(){

    	$app=\Yee\Yee::getInstance();
    	$hash = $app->db['default']->where ("user_id",$_SESSION['user_id'])->getOne("logintable");

		if(password_verify($this->current,$hash['password']))
        {
            return true;
        }
        else
        {
            return false;
        }   
    }
    public function checkifnewpasswordmatch(){

    	if($this->new1 == $this->new2){
    		return true;
    	}
    	else{
    		return false;
    	}
    }

    public function checkeverything(){
    	if($this->checkifempty() && $this->checkscurrentpass() && $this->checkifnewpasswordmatch() == true){
    		return true;
    	}else{
    		return false;
    	}
    }

    public function update(){

    	$app = \Yee\Yee::getInstance();

        $data = Array(
                'password' => password_hash($this->new1,PASSWORD_DEFAULT)
                );

        $app->db['default']->where('user_id',$_SESSION['user_id'])->update('logintable', $data);
    }
}