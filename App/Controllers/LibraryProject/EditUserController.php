<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\DeleteUserModel;
use App\Models\Library\EditUserModel;
use App\Models\Library\DisplayUserModel;
use App\Models\Library\GetUserIdModel;




class EditUserController extends Controller
{
    /**
     * @Route('/edit/:user_id')
     * @Name('users.getdata')
     */
    public function UserData($user_id)
    {
        $app = $this->getYee();

        $usermodel = new GetUserIdModel($user_id);
        $getRow = $usermodel ->getOne();


        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        $data = array(
                    'users' => $user_id,
                    'user_id' => $user_id,
                    'getRow' =>$getRow,
                    'firstname'=>$fname,
                    'lastname'=>$lname
                    );

        $app->render('Library/edituser.twig', $data);
    }

    /**
     * @Route('/edit1/:user_id')
     * @Name('users.edit')
     * @Method('POST')
    */
    public function postData($user_id)
    {
        $app = $this->getYee();

        $user_id = $app->request()->post("user_id");
        $firstname = $app->request()->post('firstname');
        $lastname = $app->request()->post('lastname');
        $email = $app->request()->post('email');
        $access = $app->request()->post('access');

        $result = new EditUserModel($user_id,$firstname, $lastname, $email,$access);
        
        $check = $result->checkIfEmpty($user_id, $firstname, $lastname, $email,$access);


        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        if($check == true){

            $result->updateInfo();
            $usertable = new DisplayUserModel();
            $get = $usertable->display();
            $success = "Sucesfully editted";
            $data = array(
                        'users'=>$get,
                        'success'=>$success,
                        'firstname'=>$fname,
                        'lastname'=>$lname
                        );
            $app->redirect('/users/1',$data);
        }else
        {

            $error = "Please do not leave blank spaces!";

            $data = array(
                        'error'=>$error,
                        'firstname'=>$fname,
                        'lastname'=>$lname
                        );
            $app->render('Library/edituser.twig',$data);
        }
        

        
    }
    
    /**
     * @Route('/delete/:user_id')
     * @Name('users.delete')
     */

    public function delete($user_id)
    {
        $app=$this->getYee(); //$app = new Yee()

        $user = new DeleteUserModel($user_id);
        $get = $user->delete();

        $sucess = "Sucessfully deleted!";


        $usertable = new DisplayUserModel();
        $displayuser = $usertable->display();

        $data = array(
                    'delete'=>$get,
                    'sucess'=>$sucess,
                    'users' =>$displayuser
                    );

        $app->redirect('/users/1',$data);
    }
}