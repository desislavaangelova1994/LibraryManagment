<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\DisplayUserModel;
use App\Models\Library\ListMostIssuedBooksModel;
use App\Models\Library\ChangePasswordModel;


class ChangePasswordController extends Controller
{
    /**
    * @Route('/changepassword')
    * @Name('change.password')
    */

     public function changepass()
    {

        $app=$this->getYee(); //$app = new Yee()
        
        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        //Lists 5 most issued books
        $book = new ListMostIssuedBooksModel();
        $mostcommon = $book->List5MostIssuedBooks();
                
        $data = array(
                        'firstname'=>$fname,
                        'lastname'=>$lname,
                        'bookinfo'=>$mostcommon
                    );

        $app->render('Library/changepassword.twig',$data);
       
    }

     /**
    * @Route('/change')
    * @Name('change.password')
    * @Method('POST')
    */

     public function change()
    {

        $app=$this->getYee(); //$app = new Yee()

        $current = $app->request()->post('currentpassword');
        $new1 = $app->request()->post('newpassword');
        $new2 = $app->request()->post('newpassword2');

        $new = new ChangePasswordModel($current,$new1,$new2);
        $newpass = $new->checkeverything();

        if($newpass == true){
            $new->update();

            $message = "You have updated your password";

        }else{
            $message = "Please review your inputs.";

        }

        //Displays the user's firstname and lastname in the header.
            $getInfo = new DisplayUserModel();
            $fname = $getInfo->firstname();
            $lname = $getInfo->lastname();

            //Lists 5 most issued books
            $book = new ListMostIssuedBooksModel();
            $mostcommon = $book->List5MostIssuedBooks();
                    
            $data = array(
                            'firstname'=>$fname,
                            'lastname'=>$lname,
                            'bookinfo'=>$mostcommon,
                            'message'=>$message
                        );

            $app->render('Library/changepassword.twig',$data);

               
    }
}