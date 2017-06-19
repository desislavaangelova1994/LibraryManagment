<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\SignInModel;
use App\Models\Library\DisplayUserModel;
use App\Models\Library\ListMostIssuedBooksModel;

class UserHomePageController extends Controller
{
    /**
    * @Route('/userpanel')
    * @Name('userpanel')
    */

     public function userpanel()
    {

        $app=$this->getYee(); //$app = new Yee()
        
        
        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        //Lists 5 most issued books
        $book = new ListMostIssuedBooksModel();
        $mostcommon = $book->List5MostIssuedBooks();
       
        if($_SESSION['access'] == '2' ){

            $data = array(
                'firstname'=>$fname,
                'lastname'=>$lname,
                'bookinfo'=>$mostcommon
                );

            $app->render('Library/userpanel.twig',$data);
        }
        else{

            $error = 'Please log in to see this page! ';
            $data = array(
                        'error' => $error
                        );
            $app->redirect('Library/index.twig',$data);
        }
    }
}