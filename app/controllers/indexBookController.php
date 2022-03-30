<?php
namespace coding\app\controllers;

use coding\app\Models\Book;

class IndexBookController extends Controller{


    function listAll(){
        $books=new Book();
        $allBooks=$books->getAll();
        $this->view('index',$allBooks);
    }
}

?>