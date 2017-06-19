<?php
namespace App\Models\Library;

class DeleteUserModel
{
	private $user_id;

	public function __construct($user_id)
    {
         $this->user_id = $user_id;
    }

    public function delete(){
    $app=\Yee\Yee::getInstance();

    $app->db['default']->where('user_id', $this->user_id);
    return $app->db['default']->delete('logintable');
    }
}
