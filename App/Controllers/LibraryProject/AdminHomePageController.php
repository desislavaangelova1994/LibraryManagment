<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\SignInModel;
use App\Models\Library\DisplayUserModel;
use App\Models\Library\ListMostIssuedBooksModel;


class AdminHomePageController extends Controller
{
    /**
    * @Route('/adminpanel')
    * @Name('adminpanel')
    */

     public function adminpanel()
    {

        $app=$this->getYee(); //$app = new Yee()

        
        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        //Lists 5 most issued books
        $book = new ListMostIssuedBooksModel();
        $mostcommon = $book->List5MostIssuedBooks();
                
        if($_SESSION['access'] == "1" ){

            $data = array(
                        'firstname'=>$fname,
                        'lastname'=>$lname,
                        'bookinfo'=>$mostcommon
                        );

            $app->render('Library/adminpanel.twig',$data);
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