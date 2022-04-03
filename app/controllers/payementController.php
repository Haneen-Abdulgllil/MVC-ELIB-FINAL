<?php
namespace coding\app\controllers;

use coding\app\Models\Payments;


class payementController extends Controller{


    function add_payments(){
        $this->view('add_payments');
    }
    function edit_payments(){
        $this->view('edit_payments');
    }
    
    function listAll(){
        $this->view('app-payments-list');
    } 
    function store(){
        print_r($_POST);
        print_r($_FILES);
        $pay=new Payments();
        
        $pay->name=$_POST['name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $pay->image=$imageName!=null?$imageName:"default.png";
        $pay->created_by=1;
        $pay->is_active=$_POST['is_active'];

        $pay->save();
        $this->view('app-payments-list');

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