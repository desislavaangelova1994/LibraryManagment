<?php

namespace App\Models\Library;

class YouAreBannedModel
{
   
    public function getBannedUserid(){

        $app=\Yee\Yee::getInstance();
        $user = $app->db['default']->where ("user_id",$_SESSION['user_id'])->getOne("userstable");
        return $user['user_id'];

    }
    public function getData(){

        $db = \Yee\Yee::getInstance()->db['default'];

        $sql = "SELECT logintable.user_id,logintable.firstname,logintable.lastname,logintable.email FROM logintable INNER JOIN userstable ON logintable.user_id = userstable.user_id ";

        return $db->rawQuery($sql);
    }
}