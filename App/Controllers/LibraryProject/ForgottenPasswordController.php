<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\ForgottenPasswordModel;
use App\Libraries\Mailer\Mailer;


class ForgottenPasswordController extends Controller
{
    /**
     * @Route('/forgot')
     * @Name('forgot.your.password')
     */

    public function forgottenpassword()
    {
        $app=$this->getYee(); //$app = new Yee()

        $_SESSION['access'] = false;
        
        $data = array();
       
        $app->render('Library/forgottenpassword.twig',$data);
    }

    /**
     * @Route('/forgotpost')
     * @Name('forgot.your.password')
     * @Method('POST')
     */
    public function checkIfEmailExists()
    {
        $app=$this->getYee(); //$app = new Yee()

        $_SESSION['access'] = false;

        $email = $app->request()->post('email');

        $validationEmail = new ForgottenPasswordModel($email);
        $afterValidation = $validationEmail->forgottenpassword();

       

        if($afterValidation == true){

            $app=$this->getYee(); //$app = new Yee()

            $name = "Library";
            $email = $app->request()->post('email');
            var_dump($email);
            $phone ="02222232";
            $subject = "Hello ";

            $success = "A new password is sent to your email!";
            $dataMail = array(
                        'success' => $success,
                        'content' => $email,
                        'content1'=>$phone,
                        'content2'=>$subject
                            );

            $mailer = new Mailer("bamboo.designer.clothing@gmail.com", $email ,"signup", $dataMail, "Forgotten Password");
            $mailer->buildEmail()->sendEmail();
            
            $app->render('Library/forgottenpassword.twig');


        }else{

            $error = "Please review your information and dont leave empty fields.";

            $data = array(
                        'error'=>$error,
                        );
            $app->render('Library/forgottenpassword.twig',$data);


        }
        
    }

}