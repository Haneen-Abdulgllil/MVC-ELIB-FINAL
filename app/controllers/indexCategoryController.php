<?php
namespace coding\app\controllers;

use coding\app\Models\Category;

class IndexCategoryController extends Controller{


    function listAll(){
        $categories=new Category();                                           
        $allCategories=$categories->getAll();
        $this->view('index',$allCategories);

    }
}

?>