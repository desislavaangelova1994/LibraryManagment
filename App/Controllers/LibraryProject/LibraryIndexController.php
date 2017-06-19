<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;


class LibraryIndexController extends Controller
{
    /**
     * @Route('/(home)')
     * @Name('home.index')
     */

    public function index()
    {
        $app=$this->getYee(); //$app = new Yee()

        $_SESSION['access'] = false;
        
        $data = array();
       
        $app->render('Library/index.twig',$data);
    }
}