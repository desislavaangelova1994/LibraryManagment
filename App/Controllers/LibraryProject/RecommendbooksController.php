<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\RecommendBooksModel;
use App\Models\Library\ListMostIssuedBooksModel;
use App\Models\Library\DisplayUserModel;

class RecommendbooksController extends Controller
{
     /**
     * @Route('/recommend')
     * @Name('recommendbooks')
     * @Method('POST')
     */

    public function recommend()
    {  
        $app=$this->getYee(); //$app = new Yee()
        
        $userid = $app->request()->post('user_id');
        $title = $app->request()->post('title');
        $author = $app->request()->post('author');
        $photo= $app->request()->post('photo');
        $ISBN = $app->request()->post('isbn');

        //Recommend books
        $insert = new RecommendBooksModel($userid,$title,$author,$photo,$ISBN);
        
        $intoDb = $insert->insertDatabase();
        
        //List 5 most issued books
        $book = new ListMostIssuedBooksModel();
        $mostcommon = $book->List5MostIssuedBooks();

        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        $recommended = "The Book is Successfully Recommented";

        $data = array(
                    'recommended'=>$recommended,
                    'bookinfo'=>$mostcommon,
                    'firstname'=>$fname,
                    'lastname'=>$lname
                    );

        $app->render('Library/userpanel.twig',$data);
    }
}