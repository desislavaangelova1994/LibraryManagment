<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\AddBookModel;
use App\Models\Library\DisplayUserModel;



class AddBookController extends Controller
{
    
    /**
     * @Route('/addbook')
     * @Name('add.book')
     */

    public function index()
    {
        $app=$this->getYee(); //$app = new Yee()

        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        $data = array(
                    'firstname'=>$fname,
                    'lastname'=>$lname
                    );

        $app->render('Library/addbook.twig',$data);
    }
     /**
     * @Route('/addbookdatabase')
     * @Name('add.book.database')
     * @Method('POST')
     */

    public function addBookToDatabase()
    {  
        $app=$this->getYee(); //$app = new Yee()

        $isbn = $app->request()->post('isbn');
        $category = $app->request()->post('category');
        $format = $app->request()->post('format');
        $author = $app->request()->post('author');
        $title = $app->request()->post('title');
        $description = $app->request()->post('description');
        $status = $app->request()->post('status');
        $photo = $app->request()->post('photoLink');


        $get = new AddBookModel($isbn,$category,$format,$author,$title,$description,$status,$photo);

        $value = $get->checkifempty($isbn,$category,$format,$author,$title,$description,$status,$photo);


        //Displays the user's firstname and lastname in the header.

        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        if($value == true){

            $get->insert();
            
            $success = "The Book is Successfully Added";

            $data = array(
                        'success'=>$success,
                        'firstname'=>$fname,
                        'lastname'=>$lname,
                         );

            $app->render('Library/addbook.twig',$data);
        }
        else{
            
            $error = "Please review your book details";

            $data = array(
                        'error'=>$error,
                        'firstname'=>$fname,
                        'lastname'=>$lname,
                         );

            $app->render('Library/addbook.twig',$data);
        }
    }
}