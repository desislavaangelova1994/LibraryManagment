<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;


class LogoutController extends Controller
{
    /**
     * @Route('/logout')
     * @Name('logout.index')
     */

    public function logout()
    {
        $app=$this->getYee(); //$app = new Yee()

        
        unset($_SESSION['access']);
        unset($_SESSION['user_id']);
        $_SESSION['access'] = false;

        session_destroy();
        $app->redirect('/home');
    }

}