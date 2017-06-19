<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\IssueBookModel;
use App\Models\Library\ListMostIssuedBooksModel;
use App\Models\Library\DisplayUserModel;


class IssuePostDataController extends Controller
{
     /**
     * @Route('/issuedata')
     * @Name('issuebook')
     * @Method('POST')
     */

    public function issueBookDatabase()
    {  
        $app=$this->getYee(); //$app = new Yee()

        $bookid = $app->request()->post('book_id'); 
        $userid = $app->request()->post('user_id');
        $issuedate = $app->request()->post('issuedate');
        $returndate = $app->request()->post('returndate');
        $indate = $app->request()->post('indate');

        $insert = new IssueBookModel($bookid,$userid,$issuedate,$returndate,$indate);
        
        $insert->insert();

        //Lists 5 most issued books
        $book = new ListMostIssuedBooksModel();
        $mostcommon = $book->List5MostIssuedBooks();

        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        $statusChange = $insert->changeStatus();

        $success = "The Book is Successfully Issued";

        $data = array(
                    'success'=>$success,
                    'bookinfo'=>$mostcommon,
                    'firstname'=>$fname,
                    'lastname'=>$lname
                    );

        $app->render('Library/userpanel.twig',$data);
    }
}