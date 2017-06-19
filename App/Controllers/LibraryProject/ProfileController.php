<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\DisplayUserModel;
use App\Models\Library\ListMostIssuedBooksModel;
use App\Models\Library\MyIssuedBooksModel;



class ProfileController extends Controller
{
    /**
     * @Route('/profile')
     * @Name('my.profile')
     */

    public function profile()
    {
    	$app=$this->getYee(); //$app = new Yee()

    	//Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();


        //Lists 5 most issued books
        $book = new ListMostIssuedBooksModel();
        $mostcommon = $book->List5MostIssuedBooks();

        //Lists My issued Books
        $issuedBooks = new MyIssuedBooksModel();
        $books = $issuedBooks->myIssuedBooks();
        
        
        $data = array(
        			'firstname'=>$fname,
                    'lastname'=>$lname,
                    'bookinfo'=>$mostcommon,
                    'issuedBooks'=>$books,
                    'session'=>$_SESSION
        			);
       
        $app->render('Library/profile.twig',$data);
    }

}