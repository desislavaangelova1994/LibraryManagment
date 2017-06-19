<?php
namespace App\Models\Library;

class SearchIsbnModel
{
    public $search;

    public function __construct($search){
        $this->search = $search;
    }


   

    public function checkifempty(){

        if(empty($this->search)){
            return false;
        }
        return true;
    }

    public function data(){
        $data = Array(
                'search' => $this->search
                );

        $books_url = "https://www.googleapis.com/books/v1/volumes?q=" . urlencode($this->search);

        $books_json = file_get_contents ($books_url);
        $books_array = json_decode($books_json,true);
        return $books_array;
    }

    public function getData(){

        $books = $this->data();
        
        $data = array();

        foreach ($books['items'] as $value) {

            $data[] = $value["volumeInfo"];
            
         }
        
        return $data;
    }
    // public function getTotalData(){
    //     $books = $this->data();

    //     $amount = count($books["items"]);
       
    //     return var_dump($amount);
    // }

}