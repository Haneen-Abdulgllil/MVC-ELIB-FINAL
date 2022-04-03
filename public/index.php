<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use coding\app\controllers\HomeController;
use coding\app\controllers\CategoryController;
use coding\app\controllers\indexController;
use coding\app\controllers\AuthorsController;
use coding\app\controllers\publishersController;
use coding\app\controllers\booksController;
use coding\app\controllers\cityController;
use coding\app\controllers\OfferController;
use coding\app\controllers\OrderController;
use coding\app\controllers\orderdetailsController;
use coding\app\controllers\payementController;
use coding\app\controllers\useraddressController;
use coding\app\controllers\userPaymentController;
use coding\app\controllers\user_profController;
use coding\app\controllers\user_tokController;
use coding\app\controllers\roleController;




use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);

Router::get('/', [HomeController::class, 'index']);
Router::get('/cart', [HomeController::class, 'cart']);
Router::get('/category', [HomeController::class, 'category']);
Router::get('/details', [HomeController::class, 'details']);
Router::get('/payment', [HomeController::class, 'payment']);
Router::get('/login', [HomeController::class, 'login']);
Router::get('/register', [HomeController::class, 'register']);
Router::get('/dashboards-ecommerce', [HomeController::class, 'dashboard']);

////////////////////////////user///////////

Router::get('/new_user',[UsersController::class,'create']);
Router::get('/edit_user',[UsersController::class,'editUser']);
Router::get('/app-user-list', [UsersController::class, 'users']);
Router::get('/remove_user',[UsersController::class,'delete']);
Router::post('/users',[UsersController::class,'show']);
Router::post('/save_user',[UsersController::class,'saveUser']);

////////////////////////////category///////////

Router::get('/categories',[CategoryController::class,'listAll']);
Router::get('/add_category',[CategoryController::class,'add_category']);
Router::get('/edit_category/{id}',[CategoryController::class,'edit']);
Router::get('/remove_category',[CategoryController::class,'unActivate']);
Router::post('/save_category',[CategoryController::class,'store']);
Router::post('/update_category',[CategoryController::class,'update']);



Router::get('/',[IndexController::class,'listAll']);

////////////////////////////Authors///////////

Router::get('/authors',[AuthorsController::class,'listAll']);
Router::get('/add_author',[AuthorsController::class,'add_author']);
Router::get('/edit_author',[AuthorsController::class,'editauthor']);
Router::post('/save_author',[AuthorsController::class,'store']);
Router::post('/update_author',[AuthorsController::class,'update']);
Router::get('/remove_author',[AuthorsController::class,'remove']);

////////////////////////////Publishers///////////

Router::get('/publishers',[PublishersController::class,'listAll']);
Router::get('/add_publisher',[PublishersController::class,'add_publisher']);
Router::get('/edit_author',[PublishersController::class,'editauthor']);
Router::post('/save_author',[PublishersController::class,'store']);
Router::post('/update_publisher',[PublishersController::class,'update']);

////////////////////////////book///////////

Router::get('/books',[BooksController::class,'listAll']);
Router::get('/add_book',[BooksController::class,'add_book']);
Router::get('/edit_book',[BooksController::class,'editbook']);
Router::post('/save_book',[BooksController::class,'store']);
// Router::post('/app-book-list',[BooksController::class,'store']);

////////////////////////////city/////////

Router::get('/city',[CityController::class,'listAll']);
Router::get('/add_city',[CityController::class,'add_city']);
Router::get('/edit_city',[CityController::class,'editcity']);
Router::get('/remove_city',[CityController::class,'remove']);
Router::post('/save_city',[CityController::class,'store']);
Router::post('/update_city',[CityController::class,'update']);

////////////////////////////Offers///////////

Router::get('/offers',[OffersController::class,'listAll']);
Router::get('/add_offer',[OffersController::class,'create']);
Router::get('/edit_offer',[OffersController::class,'edit_offer']);
Router::get('/save_offer',[OffersController::class,'store']);
Router::get('/app-offer-list',[OffersController::class,'offer']);

////////////////////////////orders///////////

Router::get('/add_order',[OrderController::class,'add_order']);
Router::get('/edit_order',[OrderController::class,'editorder']);
Router::get('/app-order-list',[OrderController::class,'order']);

////////////////////////////order_details///////////

Router::get('/add_orderdetails',[orderdetailsController::class,'add_orderdetails']);
Router::get('/edit_orderdetails',[orderdetailsController::class,'editorderdetails']);
Router::get('/app-orderdetails-list',[orderdetailsController::class,'orderdetails']);

////////////////////////////payements///////////
Router::get('/payments',[payementController::class,'listAll']);
Router::get('/add_payments',[payementController::class,'add_payments']);
Router::get('/edit_payments',[payementController::class,'edit_payments']);
Router::get('/save_payments',[payementController::class,'store']);

////////////////////////////user_addresses///////////

Router::get('/add_useraddress',[useraddressController::class,'add_useraddress']);
Router::get('/edit_useraddress',[useraddressController::class,'edituseraddress']);
Router::get('/app-useraddress-list',[useraddressController::class,'useraddress']);

////////////////////////////user_addresses///////////


Router::get('/add_user_payment',[UserPaymentController::class,'add_user_payment']);
Router::get('/edit_user_payment',[UserPaymentController::class,'edituser_payment']);
Router::get('/app-user_payment-list',[UserPaymentController::class,'store']);

////////////////////////////user_profiles///////////

Router::get('/add_user_profile',[user_profController::class,'add_user_profile']);
Router::get('/edit_user_profile',[user_profController::class,'edituser_profile']);
Router::get('/app-user_profile-list',[user_profController::class,'user_profile']);

////////////////////////////user_token///////////

Router::get('/add_user_token',[user_tokController::class,'add_user_token']);
Router::get('/edit_user_token',[user_tokController::class,'edituser_token']);
Router::get('/app-user_token-list',[user_tokController::class,'user_token']);

////////////////////////////role///////////

Router::get('/add_role',[roleController::class,'add_role']);
Router::get('/edit_role',[roleController::class,'editrole']);
Router::get('/app-role-list',[roleController::class,'role']);


$system->start();

