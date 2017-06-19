<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\SignInModel;
use App\Models\Library\DisplayUserModel;
use App\Models\Library\ListMostIssuedBooksModel;


class SignInController extends Controller
{
    /**
    * @Route('/login')
    * @Name('login.validation')
    * @Method('POST')
    */

     public function login()
    {

        $app=$this->getYee(); //$app = new Yee()
        
        $email = $app->request->post('email');
        $password = $app->request->post('password');

        $sign = new SignInModel( $email, $password );
        $user = $sign ->login();
        $_SESSION['access']= false;

        //Lists 5 most issued books
        $book = new ListMostIssuedBooksModel();
        $mostcommon = $book->List5MostIssuedBooks();
        
        if($user == true)
        {
            $user = $sign->getEmail();
            $name = $sign->getUsername();
            $access = $sign->getAccess();
            $id = $sign->getID();
            
            session_regenerate_id();

            $_SESSION['user_id'] = $id;

            $_SESSION['access'] = $access;


            //Displays the user's firstname and lastname in the header.

            $getInfo = new DisplayUserModel();
            $fname = $getInfo->firstname();
            $lname = $getInfo->lastname();

            $data = array(
                        'user' => $user,
                        'session'=>$_SESSION,
                        'firstname'=>$fname,
                        'lastname'=>$lname,
                        'bookinfo'=>$mostcommon
                        );
            
            $app->render('Library/adminpanel.twig',$data);
            
          
        }       
        else
        {
            $_SESSION['access']= false;
            $error = "Wrong data!!!";
            $data = array(
                       'error'=> $error
                        );
            $app->render('Library/index.twig',$data);
        }           
    }

}