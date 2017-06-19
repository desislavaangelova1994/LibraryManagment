<?php
namespace App\Models\Library;

class DisplayUserModel
{
    public function display(){

	    $app=\Yee\Yee::getInstance();

	    $cols = Array ("user_id","firstname","lastname", "email", "password","access_level");
	    $users = $app->db['default']->get("logintable", null, $cols);
	    return $users;
    }
    public function firstname(){
    	$app=\Yee\Yee::getInstance();

    	$user = $app->db['default']->where ("user_id",$_SESSION['user_id'])->getOne("logintable");
		return $user['firstname'];
    }
    public function lastname(){
    	$app=\Yee\Yee::getInstance();

    	$user = $app->db['default']->where ("user_id",$_SESSION['user_id'])->getOne("logintable");
		return $user['lastname'];
    }
}