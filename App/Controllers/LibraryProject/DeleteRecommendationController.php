<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\DisplayBooksModel;
use App\Models\Library\DeleteRecommendedBooksModel;
use App\Models\Library\DisplayUserModel;
use App\Models\Library\ListMostIssuedBooksModel;
use App\Models\Library\DeleteBookModel;



class DeleteRecommendationController extends Controller
{
    /**
     * @Route('/deleterecomendation')
     * @Name('books.getdata')
     * @Method('POST')
     */
    public function BookData()
    {
        $app = $this->getYee();

        $id = $app->request()->post('ID');

        $delete = new DeleteRecommendedBooksModel($id);
        $deletebook = $delete ->delete($id);

        //Displays the user's firstname and lastname in the header.
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        //List 5 of the most issued books
        $book = new ListMostIssuedBooksModel();
        $mostcommon = $book->List5MostIssuedBooks();

        $data = array(
                    'firstname'=>$fname,
                    'lastname'=>$lname,
                    'bookinfo'=>$mostcommon
                    );

        $app->redirect('/myrecommendedbooks', $data);
    }
}