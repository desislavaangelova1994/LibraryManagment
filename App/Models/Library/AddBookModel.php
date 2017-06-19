<?php
namespace App\Models\Library;

class AddBookModel
{

	private $isbn;
    private $category;
	private $format;
    private $author;
    private $title;
    private $description;
    private $status;
    private $photo;

	public function __construct( $isbn, $category, $format, $author,$title,$description,$status,$photo ){
		$this->isbn = $isbn;
        $this->category = $category;
        $this->format = $format;
		$this->author = $author;
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
        $this->photo = $photo;
	}
    
    // CHECKS IF VALUES ARE EMPTY
    public function checkifempty(){

        if(empty( $this->isbn && $this->category && $this->format && $this->author && $this->title && $this->description && $this->photo)){
            return false;
        }
        return true;
    }
    // INSERTS INTO DATABASE
    
    public function insert(){
        
        $app = \Yee\Yee::getInstance();

        $data = Array(
                'ISBN' => $this->isbn,
                'category' =>$this->category,
                'format' => $this->format,
                'author' => $this->author,
                'title' => $this->title,
                'description' => $this->description,
                'status' => $this->status,
                'photo' =>$this->photo
                );
        
        $app->db['default']->insert('bookstable', $data);
    }
}