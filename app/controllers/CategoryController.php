<?php
namespace coding\app\controllers;


use coding\app\Models\Category;

class CategoryController extends Controller{

    function add_category(){
        $this->view('add_category');
    }

    function listAll(){
        $categories=new Category();
        $allCategories = Category::getAll('categories');

        $this->view('app-category-list',$allCategories);

    }


    function store(){
        print_r($_POST);
        print_r($_FILES);
        $category=new Category();
        
        $category->name=$_POST['name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $category->image=$imageName!=null?$imageName:"default.png";
        $category->created_by=1;
        $category->is_active=$_POST['is_active'];

        $category->save();
        $this->view('app-category-list');


    }
    
    function edit($params=[]){

        $cat=new Category();
        $result=$cat->getSingleRow($params['id']);
        $this->view('edit_category',$result);
        

    }
    function update(){

    }
    public function remove(){

    }

    
    public function unActivate(){
        $id = $_POST['id'];
        $is_active = $_POST['is_active'];
        if($is_active==0)$is_active=1;
        else $is_active = 0;
        $category = new Category();
        $category->update(array("is_active") , array($is_active)," id = $id");
        header("location:/categories"); 
    }



    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }

    




}

?>