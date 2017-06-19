<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\DisplayBooksModel;
use App\Models\Library\EditBooksModel;
use App\Models\Library\DeleteBookModel;
use App\Models\Library\GetBookIdModel;
use App\Models\Library\GetUserIdModel;
use App\Models\Library\DisplayUserModel;



class IssueBooksController extends Controller
{
    /**
     * @Route('/issuebook/:book_id')
     * @Name('books.issue')
     */
    public function BookData($book_id)
    {
        $app = $this->getYee();

        $getBookId = new GetBookIdModel($book_id);
        $getRow = $getBookId ->getOne();

        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        $data = array(
                    'books' => $book_id,
                    'book_id' => $book_id,
                    'getRow' =>$getRow,
                    'firstname'=>$fname,
                    'lastname'=>$lname
                    );

        $app->render('Library/issueform.twig', $data);
    }
}