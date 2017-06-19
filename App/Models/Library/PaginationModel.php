<?php
namespace App\Models\Library;

class PaginationModel{

	private $limit = 5;

	public function getPageResult($page)
	{
		$db = \Yee\Yee::getInstance()->db['default'];

		if($page == "")
		{
			$page = 1;
			$start = 0;
		}else
		{
			$start = ($page - 1) * $this->limit;
		}

		$sql = "SELECT book_id, ISBN , category , format ,author,title,description,status,photo FROM `bookstable`ORDER BY book_id DESC limit $this->limit OFFSET $start ";
		return $db->rawQuery($sql);
	}

	public function totalPages($page){
		$db = \Yee\Yee::getInstance()->db['default'];
		$sql = "SELECT * FROM bookstable";
		$query = $db->rawQuery($sql);
		$total =count($query);
		$num_page = ceil($total / $this->limit);
		return $num_page;
		
	}
	public function getStatus(){
		$db = \Yee\Yee::getInstance()->db['default'];

		$sql = "SELECT status FROM bookstable";
		
		return $db->rawQuery($sql);


	}

}
