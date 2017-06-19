<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\DisplayUserModel;
use App\Models\Library\TableRecommendsModel;

class TableRecommendedController extends Controller
{
    /**
    * @Route('/recommends/:page')
    * @Name('issued.books')
    */

     public function recommendedBooksTable($page)
    {

        $app=$this->getYee(); //$app = new Yee()

        $recommends = new TableRecommendsModel();
        $data = $recommends->recommendedBooks($page);
         $total = $recommends->totalPages($page);

        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        $start = 1;

        $data = array(
                    'lastPage' =>$total,
                    'currentPage' =>$page,
                    'start'=>$start,
                    'data'=>$data,
                    'firstname'=>$fname,
                    'lastname'=>$lname,
                    );

        $app->render('Library/viewrecommendedbooks.twig',$data);
        
    }
}