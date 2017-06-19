<?php
namespace App\Models\Library;

class ViewIssuedBooksModel
{
	private $limit = 10;

    public function getData($page){

	    $db = \Yee\Yee::getInstance()->db['default'];

	    if($page == "")
		{
			$page = 1;
			$start = 0;
		}else
		{
			$start = ($page - 1) * $this->limit;
		}

	    $sql = "SELECT issue_table.id , bookstable.title, logintable.firstname, logintable.lastname, issue_table.issue_date , issue_table.in_date FROM issue_table INNER JOIN logintable
			ON issue_table.user_id = logintable.user_id 
			INNER JOIN bookstable ON issue_table.book_id = bookstable.book_id ORDER BY issue_table.id DESC limit $this->limit OFFSET $start " ;

		return $db->rawQuery($sql);
    }

    public function totalPages($page){
		$db = \Yee\Yee::getInstance()->db['default'];
		$sql = "SELECT * FROM issue_table";
		$query = $db->rawQuery($sql);
		$total =count($query);
		$num_page = ceil($total / $this->limit);
		return $num_page;
		
	}
}