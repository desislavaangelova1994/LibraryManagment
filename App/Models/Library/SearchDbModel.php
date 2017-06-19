<?php 

namespace App\Models\Library;

class SearchDbModel
{

	private $search;

	public function __construct($search)
    {
        $this->search = $search;
    }

    public function isEmpty(){

    	if(empty($this->search)){
    		return false;
    	}else{
    		return true;
    	}

    }


    public function getData(){

	$db = \Yee\Yee::getInstance()->db['default'];

	$sql = "SELECT * FROM `bookstable` WHERE CONCAT(`ISBN`, `category`, `author`, `title`) LIKE '%$this->search%'";

    if(empty($sql)){
        return false;
    }else{
        return $db->rawQuery($sql);
    }
    
	}
}