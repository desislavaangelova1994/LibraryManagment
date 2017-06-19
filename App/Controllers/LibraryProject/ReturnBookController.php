<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\ReturnBookModel;
use App\Models\Library\PostReturnDataModel;
use App\Models\Library\ListMostIssuedBooksModel;
use App\Models\Library\DisplayUserModel;


class ReturnBookController extends Controller
{
	/**
    * @Route('/returnbook')
    * @Name('returnbook')
    */

    public function returnbook()
    {
    	$app=$this->getYee(); //$app = new Yee()

    	$returnbooks = new ReturnBookModel();
    	$userid = $returnbooks->bookinfo();
        $getDetails  = $returnbooks->getBookTitle();

        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        $date =date('Y-m-d');
        
        $data = array(
        			'booktitle'=>$getDetails,
        			'info'=>$userid,
                    'date'=>$date,
                    'firstname'=>$fname,
                    'lastname'=>$lname
        			);

    	 $app->render('Library/returnbook.twig',$data);

    }

    /**
    * @Route('/returned')
    * @Name('return')
    * @Method('POST')
    */

    public function returned()
    {
    	$app=$this->getYee(); //$app = new Yee()

    	$userid = $app->request()->post('user_id');
        $bookid = $app->request()->post('book_id');
        $indate = $app->request()->post('in_date');
        
    	$updateReturnDate = new PostReturnDataModel($userid,$bookid,$indate);
        
    	$newDate = $updateReturnDate->updateReturnDate();  

        $changeStatus = $updateReturnDate->changeStatus();
        
        //Lists 5 most issued books
        $book = new ListMostIssuedBooksModel();
        $mostcommon = $book->List5MostIssuedBooks();

         //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

    	$success = 'You have sucessfully returned your book';
        
        $data = array(
         			'successfullyreturned'=>$success,
                    'bookinfo'=>$mostcommon,
                    'firstname'=>$fname,
                    'lastname'=>$lname
    				);

    	 $app->render('Library/userpanel.twig',$data);

    }


}