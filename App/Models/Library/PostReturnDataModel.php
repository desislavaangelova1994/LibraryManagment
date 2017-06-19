<?php

namespace App\Models\Library;

class PostReturnDataModel
{
    private $userid;
    private $bookid;
    private $indate;

    public function __construct($user_id,$bookid,$indate)
    {
        $this->user_id = $user_id;
        $this->bookid = $bookid;
        $this->indate = $indate;
    }
 
	public function updateReturnDate(){
    	$app = \Yee\Yee::getInstance();

        $data = array(
                'in_date' => $this->indate
                    );

        return $app->db['default']->where('user_id', $this->user_id)->where('book_id', $this->bookid)->update('issue_table', $data);
    }
    public function changeStatus(){
        $app = \Yee\Yee::getInstance();

        $data = array(
                'status' => "Available"
                    );

        return $app->db['default']->where('book_id', $this->bookid)->update('bookstable', $data);
    }
}