<?php
namespace App\Models\Library;

class DisplayBooksModel
{
    public function displayBooks(){

	    $app=\Yee\Yee::getInstance();

	    $cols = Array ("book_id","ISBN","category", "format", "author","title","description","status","photo");
	    $books = $app->db['default']->get ("bookstable", null, $cols);
	    return $books;
    }
}