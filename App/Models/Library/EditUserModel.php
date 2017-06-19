<?php
namespace App\Models\Library;

class EditUserModel
{
    private $user_id;
    private $firstname;
    private $lastname;
    private $email;
    private $access_level;

    public function __construct($user_id, $firstname, $lastname, $email,$access_level)
    {
        $this->user_id = $user_id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->access_level = $access_level;

    }

    public function updateInfo()
    {
        $app = \Yee\Yee::getInstance();

        $data = array(
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'access_level' => $this->access_level
                );

        return $app->db['default']->where('user_id', $this->user_id)->update('logintable', $data);
    }

    public function checkIfEmpty($user_id, $firstname, $lastname, $email,$access_level){

        if(empty($this->firstname && $this->lastname && $this->email && $this->user_id)){
            return false;
        }
        return true;
    }

    public function insertUser()
    {
        $app = \Yee\Yee::getInstance();

        $data = array(
            'user_id' => $this->user_id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'access_level' => $this->access_level
        );

        return $app->db['default']->insert('logintable', $data);
    }


}