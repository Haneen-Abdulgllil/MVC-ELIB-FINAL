<?php
namespace coding\app\controllers;

use coding\app\Models\Book;
use coding\app\Models\Category;

class IndexController extends Controller{


    function listAll(){
        $books=new Book();
        $allbooks = Book::getAll('books');
        $allCategoires = Category::getAll('categories');
        $viewContent=array('books'=>$allbooks,'categories'=>$allCategoires);
        $this->view('index',$viewContent);
    }
}

?>