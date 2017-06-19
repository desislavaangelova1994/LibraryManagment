<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\PaginationModel2;
use App\Models\Library\DisplayUserModel;


class PaginationController extends Controller
{
    /**
    * @Route('/users/:page')
    * @Name('display.users.pagination')
    */

     public function testgetPageList($page)
    {

        $app=$this->getYee(); //$app = new Yee()
        $pagination = new PaginationModel2();
        $paginate = $pagination->getPageResult($page);
        $total = $pagination->totalPages($page);


        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        $start = 1;
        $data = array(
                    'users'=>$paginate,
                    'lastPage' =>$total,
                    'currentPage' =>$page,
                    'start'=>$start,
                    'firstname'=>$fname,
                    'lastname'=>$lname
                    );

        $app->render('Library/displayuser.twig',$data);
        

    }

}