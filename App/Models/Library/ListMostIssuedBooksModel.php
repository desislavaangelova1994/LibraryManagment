<?php

namespace App\Models\Library;

class ListMostIssuedBooksModel{

	public function List5MostIssuedBooks(){

		$db = \Yee\Yee::getInstance()->db['default'];

		$sql = "SELECT bookstable.title,bookstable.author,bookstable.photo, issue_table.book_id, COUNT(issue_table.book_id) AS amount FROM issue_table INNER JOIN bookstable ON issue_table.book_id = bookstable.book_id GROUP BY book_id ORDER BY amount DESC LIMIT 5";

		return $db->rawQuery($sql);
	}

	
}