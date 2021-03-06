<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\PaginationModel;
use App\Models\Library\DisplayUserModel;
use App\Models\Library\YouAreBannedModel;

class UserBookController extends Controller
{
    
    /**
     * @Route('/issue/:page')
     * @Name('issuebook.display')
     */

    public function userbook($page)
    {
        $app=$this->getYee(); //$app = new Yee()

        $pagination = new PaginationModel();
        $paginate = $pagination->getPageResult($page);
        $total = $pagination->totalPages($page);

        //Checks if a user is banned!
        $banned = new YouAreBannedModel();
        $ban = $banned->getBannedUserid();

        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        $data = array(
                    'books'=>$paginate,
                    'lastPage' =>$total,
                    'currentPage' =>$page,
                    'firstname'=>$fname,
                    'lastname'=>$lname,
                    'ban'=>$ban
                    );

        $app->render('Library/issuebook.twig',$data);
    }  
}