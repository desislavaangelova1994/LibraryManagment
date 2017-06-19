<?php

namespace App\Models\Library;

class PaginationModel2
{

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

		$sql = "SELECT user_id, firstname, lastname, email,access_level FROM `logintable` limit $this->limit OFFSET $start";
		return $db->rawQuery($sql);
	}

	public function totalPages($page){
		$db = \Yee\Yee::getInstance()->db['default'];
		$sql = "SELECT * FROM logintable";
		$query = $db->rawQuery($sql);
		$total =count($query);
		$num_page = ceil($total / $this->limit);
		return $num_page;
		
	}

}