<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\DisplayBooksModel;
use App\Models\Library\PaginationModel;
use App\Models\Library\DisplayUserModel;



class DisplayBooksController extends Controller
{
    
    /**
     * @Route('/books/:page')
     * @Name('books.display')
     */

    public function displaybooks($page)
    {
        $app=$this->getYee(); //$app = new Yee()

        $pagination = new PaginationModel();
        $paginate = $pagination->getPageResult($page);
        $total = $pagination->totalPages($page);


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
                    );

        $app->render('Library/displaybook.twig',$data);
    }  
}