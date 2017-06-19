<?php

use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\Library\DisplayBooksModel;
use App\Models\Library\EditBooksModel;
use App\Models\Library\DeleteBookModel;
use App\Models\Library\GetBookIdModel;
use App\Models\Library\DisplayUserModel;



class EditBooksController extends Controller
{
    /**
     * @Route('/bookedit/:book_id')
     * @Name('books.getdata')
     */
    public function BookData($book_id)
    {
        $app = $this->getYee();

        $getBookId = new GetBookIdModel($book_id);
        $getRow = $getBookId ->getOne();


        //Displays the user's firstname and lastname in the header.

        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        $data = array(
                    'books' => $book_id,
                    'book_id' => $book_id,
                    'getRow' =>$getRow,
                    'firstname'=>$fname,
                    'lastname'=>$lname,
                    );

        $app->render('Library/editbooks.twig', $data);
    }

     /**
     * @Route('/bookedit1/:book_id')
     * @Name('books.edit')
     * @Method('POST')
    */
    public function postData($book_id)
    {
        $app = $this->getYee();

        $book_id = $app->request()->post("book_id");
        $isbn = $app->request()->post("isbn");
        $category = $app->request()->post('category');
        $format = $app->request()->post('format');
        $author = $app->request()->post('author');
        $title = $app->request()->post('title');
        $description = $app->request()->post('description');
        $status = $app->request()->post('status');
        $photo = $app->request()->post('photo');

        $editBooksModel = new EditBooksModel($book_id,$isbn,$category,$format,$author,$title,$description,$status,$photo);
        

        $editBooksModel->updateInfo();

        $bookstable = new DisplayBooksModel();
        $get = $bookstable->displayBooks();


        //Displays the user's firstname and lastname in the header.
        
        $getInfo = new DisplayUserModel();
        $fname = $getInfo->firstname();
        $lname = $getInfo->lastname();

        
        $data = array(
                    'books'=>$get,
                    'firstname'=>$fname,
                    'lastname'=>$lname,
                    );

        $app->redirect('/books/1',$data);
    }

    /**
     * @Route('/deletebook/:book_id')
     * @Name('users.delete')
     */

    public function delete($book_id)
    {
        $app=$this->getYee(); //$app = new Yee()

        $book = new DeleteBookModel($book_id);
        $get = $book->delete();

        $sucess = "Sucessfully deleted!";

        $booktable = new DisplayBooksModel();
        $displaybook = $booktable->displayBooks();

        $data = array(
                    'delete'=>$get,
                    'sucess'=>$sucess,
                    'books' =>$displaybook
                    );

        $app->redirect('/books/1',$data);
    }
}