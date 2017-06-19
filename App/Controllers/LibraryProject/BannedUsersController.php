<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\DisplayUserModel;
use App\Models\Library\YouAreBannedModel;
use App\Models\Library\BanUserModel;




class BannedUsersController extends Controller
{
    /**
     * @Route('/banned')
     * @Name('banned.users')
     */
    public function BannedUsers()
    {
        $app = $this->getYee();

        $result = new YouAreBannedModel();

        $BannedUsers = $result->getData();

        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();


        $data = array(
                    'firstname'=>$fname,
                    'lastname'=>$lname,
                    'banned'=>$BannedUsers
                    );

        $app->render('Library/bantable.twig', $data);
    }

    /**
     * @Route('/unban')
     * @Name('unban.user')
     * @Method('POST')
     */

    public function unBan()
    {
        $app =$this->getYee();

        $user_id = $app->request()->post('user_id');
        $ban = $app->request()->post('ban');

        $unBan = new BanUserModel($user_id,$ban);

        $unBanned = $unBan->unban();

        $app->redirect('/banned');


    }
    
        
}