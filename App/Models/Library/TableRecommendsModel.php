<?php

namespace App\Models\Library;

class TableRecommendsModel{

	private $limit = 5;

	public function recommendedBooks($page){

		$db = \Yee\Yee::getInstance()->db['default'];


		if($page == "")
		{
			$page = 1;
			$start = 0;
		}else
		{
			$start = ($page - 1) * $this->limit;
		}

		$sql = "SELECT recommented_books.title,recommented_books.author,recommented_books.photo, logintable.firstname,logintable.lastname FROM recommented_books INNER JOIN logintable ON recommented_books.user_id = logintable.user_id limit $this->limit OFFSET $start";

		return $db->rawQuery($sql);
	}

	public function totalPages($page){
		$db = \Yee\Yee::getInstance()->db['default'];
		$sql = "SELECT * FROM recommented_books";
		$query = $db->rawQuery($sql);
		$total =count($query);
		$num_page = ceil($total / $this->limit);
		return $num_page;
		
	}
	

	
}