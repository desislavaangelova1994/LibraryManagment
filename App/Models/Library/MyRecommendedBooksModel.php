<?php

namespace App\Models\Library;

class MyRecommendedBooksModel
{
	public function recommendation(){

    	$app=\Yee\Yee::getInstance();

    	$book = $app->db['default']->where("user_id",$_SESSION['user_id'])->get("recommented_books");

  
		return $book;
    }    
}