<?php
namespace App\Models\Library;

class GetUserIdModel
{	
    private $user_id;

	public function __construct($user_id){
		$this->user_id = $user_id;
	}

    public function getOne(){

    	$app=\Yee\Yee::getInstance();
    	$user = $app->db['default']->where ("user_id",$this->user_id)->getOne("logintable");
		return $user;
    }
}