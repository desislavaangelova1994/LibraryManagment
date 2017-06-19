<?php

namespace App\Models\Library;

class MyIssuedBooksModel{

	public function myIssuedBooks(){

		$db = \Yee\Yee::getInstance()->db['default'];

		$sql = "SELECT issue_table.user_id, issue_table.id ,issue_table.book_id, bookstable.title, bookstable.author, bookstable.photo FROM issue_table INNER JOIN bookstable ON issue_table.book_id = bookstable.book_id WHERE issue_table.user_id = {$_SESSION['user_id']}";

		return $db->rawQuery($sql);	
	}

}