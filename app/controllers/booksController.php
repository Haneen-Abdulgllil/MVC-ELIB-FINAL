<?php
namespace coding\app\controllers;


use coding\app\Models\Book;

class BooksController extends Controller{

    function add_book(){
        $this->view('add_book');
    }

    function listAll(){
        $books=new Book();
        $allbooks = Book::getAll('books');
        $this->view('app-book-list',$allbooks);

    }


    function store(){
        print_r($_POST);
        print_r($_FILES);
        $book=new Book();
        
        $book->title=$_POST['name'];
        $imageName=$this->uploadFile($_FILES['image']);
        $book->image=$imageName!=null?$imageName:"default.png";
        $book->pages_number=$_POST['pages_number'];
        $book->price=$_POST['price'];
        $book->quantity=$_POST['quantity'];
        $book->format=$_POST['format'];
        $book->description=$_POST['description'];


        $book->created_by=1;
        $book->is_active=$_POST['is_active'];

        $book->save();
        $this->view('app-book-list');


    }
    function edit(){
            $this->view('edit_category');
    }
    function update(){

    }
    public function remove(){

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