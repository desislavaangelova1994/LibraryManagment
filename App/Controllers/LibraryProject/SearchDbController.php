<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\SearchDbModel;
use App\Models\Library\PaginationModel;



class SearchDbController extends Controller
{
    
    /**
     * @Route('/searchdb')
     * @Name('search.database')
     * @Method('POST')
     */

    public function SearchDb(){

    	$app=$this->getYee(); //$app = new Yee()

    	$searchResult = $app->request()->post('search');

    	$search = new SearchDbModel($searchResult);

    	$empty = $search->isEmpty();

        if($_SESSION['access'] == '2' ){

        	if($empty == true ){

        		$result = $search->getData();

                if(empty($result)){

                    $app->redirect('/issue/1');
                }else{
        		$data = array(
            			'books'=>$result,
            			);

        	 	$app->render('Library/issuebook.twig',$data);
                }
        	}else{

        	 	$app->redirect('/issue/1');
        	}
        }
        elseif($_SESSION['access'] == '1'){

                if($empty == true ){

                $result = $search->getData();

                if(empty($result)){

                    $app->redirect('/books/1');
                }
                else
                {
                
                $data = array(
                        'books'=>$result,
                        );

                $app->render('Library/displaybook.twig',$data);
                }
            }
           else{

                $app->redirect('/books/1');
            }


        }

    }
}

