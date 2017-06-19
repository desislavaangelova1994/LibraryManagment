<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\AddUserModel;
use App\Models\Library\DisplayUserModel;



class AddUserController extends Controller
{
    
    /**
     * @Route('/adduser')
     * @Name('add.user')
     */

    public function adduser()
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

        $app->render('Library/adduser.twig',$data);
    }

    /**
     * @Route('/adding')
     * @Name('add.user.database')
     * @Method('POST')
     */

    public function adding()
    {
        $app=$this->getYee(); //$app = new Yee()

        $firstname = $app->request()->post('firstname');
        $lastname = $app->request()->post('lastname');
        $password = $app->request()->post('password');
        $email = $app->request()->post('email');
        $access = $app->request()->post('access');

        $test = new AddUserModel($firstname,$lastname,$password,$email,$access);

        

        $isempty = $test->checkifempty($firstname,$lastname,$password,$email,$access);
        $isnumeric = $test->isNumeric($firstname,$lastname);


        //Displays the user's firstname and lastname in the header        
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();
        

        if($isempty && $isnumeric == true){

            $test->insertDatabase();

            $success = "The User is Successfully Added to the Database";

            $data = array(
                        'success'=>$success,
                        'firstname'=>$fname,
                        'lastname'=>$lname
                         );

            $app->render('Library/adduser.twig',$data);
        }
        else{
            $error = "Please review your user details";

            $data = array(
                        'error'=>$error,
                        'firstname'=>$fname,
                        'lastname'=>$lname
                         );

            $app->render('Library/adduser.twig',$data);
        }
    }
}