<?php
namespace App\Models\Library;

class RecommendBooksModel
{

	private $user_id;
    private $title;
	private $author;
    private $photo;
    private $ISBN;

	public function __construct( $user_id, $title, $author, $photo,$ISBN ){
		$this->user_id = $user_id;
        $this->title = $title;
        $this->author = $author;
		$this->photo = $photo;
        $this->ISBN = $ISBN;
	}

    // INSERTS INTO DATABASE
    public function insertDatabase(){
        
        $app = \Yee\Yee::getInstance();

        $data = Array(
                'user_id' => $this->user_id,
                'title' => $this->title,
                'author' => $this->author,
                'photo' => $this->photo,
                'ISBN' => $this->ISBN
                );

        $app->db['default']->insert('recommented_books', $data);
    }
}