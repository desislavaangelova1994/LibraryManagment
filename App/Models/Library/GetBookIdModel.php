<?php
namespace App\Models\Library;

class GetBookIdModel
{	
    private $book_id;

	public function __construct($book_id){
		$this->book_id = $book_id;

	}

    public function getOne(){

    	$app=\Yee\Yee::getInstance();

    	$book = $app->db['default']->where ("book_id",$this->book_id)->getOne("bookstable");
		return $book;
    }
}