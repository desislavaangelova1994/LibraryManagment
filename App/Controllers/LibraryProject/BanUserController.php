<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\BanUserModel;
use App\Models\Library\DisplayUserModel;
use App\Models\Library\GetUserIdModel;




class BanUserController extends Controller
{
    /**
     * @Route('/ban')
     * @Name('users.getdata')
     * @Method('POST')
     */
    public function UserBan()
    {
        $app = $this->getYee();

        $user_id = $app->request()->post("user_id");
        $ban = $app->request()->post('ban');

        $result = new BanUserModel($user_id,$ban);

        $insert = $result->insert();

        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        $banned = "This user has been banned!";

        $data = array(
                    'users' => $user_id,
                    'user_id' => $user_id,
                    'firstname'=>$fname,
                    'lastname'=>$lname,
                    'ban' => $banned,
                    'session'=>$_SESSION
                    );

        $app->render('Library/adminpanel.twig', $data);
    }
    
        
}
    
   