<?php
namespace App\Models\Library;

class BanUserModel
{
    private $user_id;
    private $ban;

    public function __construct($user_id,$ban)
    {
        $this->user_id = $user_id;
        $this->ban = $ban;
    }

    public function insert()
    {
        $app = \Yee\Yee::getInstance();

        $data = array(
                'user_id' => $this->user_id,
                'overdue_ban' => $this->ban
                );

         $app->db['default']->insert('userstable', $data);
    }
    public function unban(){
        $app = \Yee\Yee::getInstance();

        $app->db['default']->where('user_id', $this->user_id);
        return $app->db['default']->delete('userstable');

    }
}