<?php
namespace App\Models\Library;

class IssueBookModel
{

	private $book_id;
    private $user_id;
	private $issuedate;
    private $returndate;
    private $indate;
    
	public function __construct( $book_id, $user_id, $issuedate, $returndate,$indate){
		$this->book_id = $book_id;
        $this->user_id = $user_id;
        $this->issuedate = $issuedate;
		$this->returndate = $returndate;
        $this->indate = $indate;
	}
    
    // INSERTS INTO DATABASE
    
    public function insert(){
        
        $app = \Yee\Yee::getInstance();

        $data = Array(
                'book_id' => $this->book_id,
                'user_id' =>$this->user_id,
                'issue_date' => $this->issuedate,
                'return_date' => $this->returndate,
                'in_date'=> $this->indate
                );
        
        $app->db['default']->insert('issue_table', $data);
    }

    public function changeStatus(){

        $app = \Yee\Yee::getInstance();

        $data = array(
                'status' =>"Not Available"
                    );

        return $app->db['default']->where('book_id', $this->book_id)->update('bookstable', $data);

    }
}