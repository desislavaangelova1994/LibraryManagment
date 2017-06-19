<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\SearchIsbnModel;
use App\Models\Library\ListMostIssuedBooksModel;
use App\Models\Library\DisplayUserModel;

class SearchIsbnController extends Controller
{
    /**
    * @Route('/search')
    * @Name('search')
    * @Method('POST')
    */

     public function searchBox()
    {

        $app=$this->getYee(); //$app = new Yee()

        $search = $app->request->post("search");

        $result = new SearchIsbnModel($search);
        $value = $result->checkifempty($search);  
        
        //Lists 5 most issued books
        $book = new ListMostIssuedBooksModel();
        $mostcommon = $book->List5MostIssuedBooks();   


        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();   
        
        if($value == true){
        $title = $result->getData();

        $data = array(
                    'title' => $title,
                    'bookinfo'=>$mostcommon,
                    'firstname'=>$fname,
                    'lastname'=>$lname,
                    'session'=>$_SESSION
                    );

       
        $app->render('Library/adminpanel.twig',$data);
        }
        else{
            $error = "Please dont leave empty fields";
            $data = array(
                        'empty'=>$error,
                        'bookinfo'=>$mostcommon
                        );
            $app->render('Library/adminpanel.twig',$data);
        }

    }
}