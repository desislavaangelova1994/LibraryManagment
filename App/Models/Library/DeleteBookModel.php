<?php
namespace App\Models\Library;

class DeleteBookModel
{
	private $book_id;

	public function __construct($book_id)
    {
         $this->book_id = $book_id;
    }

    public function delete(){
    $app=\Yee\Yee::getInstance();

    $app->db['default']->where('book_id', $this->book_id);
    return $app->db['default']->delete('bookstable');
    }
}
