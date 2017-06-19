<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\ViewIssuedBooksModel;
use App\Models\Library\DisplayUserModel;

class ViewIssuedBooksController extends Controller
{
    /**
    * @Route('/issuedbooks/:page')
    * @Name('issued.books')
    */

     public function issuedbooks($page)
    {

        $app=$this->getYee(); //$app = new Yee()

        $issuedbooks = new ViewIssuedBooksModel();
        $results = $issuedbooks->getData($page);
        $total = $issuedbooks->totalPages($page);
        
        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        $data = array(
                    'results'=>$results,
                    'lastPage' =>$total,
                    'currentPage' =>$page,
                    'firstname'=>$fname,
                    'lastname'=>$lname,
                    );

       

        $app->render('Library/viewissuedbooks.twig',$data);
        
    }
}