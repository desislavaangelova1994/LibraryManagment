<?php
namespace App\Models\Library;

class EditBooksModel
{
    private $book_id;
    private $isbn;
    private $category;
    private $format;
    private $author;
    private $title;
    private $description;
    private $status;
    private $photo;

    public function __construct($book_id, $isbn, $category, $format,$author,$title,$description,$status,$photo)
    {
        $this->book_id = $book_id;
        $this->isbn = $isbn;
        $this->category = $category;
        $this->format = $format;
        $this->author = $author;
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
        $this->photo=$photo;

    }


    public function getOne(){

        $app=\Yee\Yee::getInstance();

        $data = array(
                'book_id' => $this->book_id,
                );
        $book = $app->db['default']->where ("book_id",$this->book_id)->getOne("bookstable",$data);
        return $book;

    }
    public function updateInfo()
    {
        $app = \Yee\Yee::getInstance();

        $data = array(
                'ISBN' => $this->isbn,
                'category' => $this->category,
                'format' => $this->format,
                'author' => $this->author,
                'title' => $this->title,
                'description' => $this->description,
                'status' => $this->status,
                'photo'=>$this->photo
                );

        return $app->db['default']->where('book_id', $this->book_id)->update('bookstable', $data);
    }

    public function insertUser()
    {
        $app = \Yee\Yee::getInstance();

        $data = array(
                'ISBN' => $this->isbn,
                'category' => $this->category,
                'format' => $this->format,
                'author' => $this->author,
                'title' => $this->title,
                'description' => $this->description,
                'status' => $this->status,
                'photo'=> $this->photo
        );

        return $app->db['default']->insert('bookstable', $data);
    }


}