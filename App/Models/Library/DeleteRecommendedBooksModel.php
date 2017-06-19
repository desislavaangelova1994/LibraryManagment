<?php
namespace App\Models\Library;

class DeleteRecommendedBooksModel
{
	private $id;

	public function __construct($id)
    {
         $this->id = $id;
    }

    public function delete(){
    $app=\Yee\Yee::getInstance();

    $app->db['default']->where('ID', $this->id );
    return $app->db['default']->delete('recommented_books');
    }
}
