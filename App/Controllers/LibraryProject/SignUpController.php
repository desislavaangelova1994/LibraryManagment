<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\SignUpModel;


class SignUpController extends Controller
{
    /**
     * @Route('/signup')
     * @Name('signup.index')
     */

    public function index()
    {
        $app=$this->getYee(); //$app = new Yee()

        $data = array();

        $app->render('Library/registerform.twig',$data);
    }


    /**
     * @Route('/signup2')
     * @Name('signup.validation')
     * @Method('POST')
     */

    public function registration()
    {
        $app=$this->getYee(); //$app = new Yee()

        $firstname = $app->request()->post('firstname');
        $lastname = $app->request()->post('lastname');
        $password = $app->request()->post('password');
        $email = $app->request()->post('email');

        $model = new SignUpModel( $firstname,$lastname,$password,$email );



        $fname = $model->checkfirstname($firstname);
        $lname = $model->checklastname($lastname);
        $pass = $model->checkPassword($password);
        $mail = $model->checkEmail($email);

        if($fname && $lname && $pass && $mail == true)
        {
            $model -> insertLoginTable();

            $success = "Sucessfully registered!";

            $data = array(
                'Success'=> $success
                 );
            $app->render('Library/registerform.twig',$data);
        }
        else{
         $error = 'Please enter the correct data';

         $data = array(
            'Error'=>$error
            );
         $app->render('Library/registerform.twig',$data);
        }

    }

}