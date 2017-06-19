<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\MyRecommendedBooksModel;
use App\Models\Library\DisplayUserModel;


class MyRecommendedBooksController extends Controller
{
    /**
     * @Route('/myrecommendedbooks')
     * @Name('recommended.books')
     */

    public function recommndedbooks()
    {
        $app=$this->getYee(); //$app = new Yee()

        $recommendedbooks = new MyRecommendedBooksModel();
        $userid = $recommendedbooks->recommendation();

        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();


        $data = array(
                    'info'=>$userid,
                    'firstname'=>$fname,
                    'lastname'=>$lname
                    );

         $app->render('Library/myrecommendedbooks.twig',$data);


       
    }
}