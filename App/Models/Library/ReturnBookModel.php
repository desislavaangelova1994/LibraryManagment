<?php

namespace App\Models\Library;

class ReturnBookModel
{
	public function bookinfo(){
    	$app=\Yee\Yee::getInstance();

    	$book = $app->db['default']->where("user_id",$_SESSION['user_id'])->get("issue_table");

  
		return $book;
    }

    public function getBookTitle(){
    	$db = \Yee\Yee::getInstance()->db['default'];

    	$sql = "SELECT bookstable.title,bookstable.book_id,issue_table.in_date FROM bookstable INNER JOIN issue_table
			ON bookstable.book_id = issue_table.book_id WHERE issue_table.user_id = {$_SESSION['user_id']} " ;

		return $db->rawQuery($sql);	
    }
    
}