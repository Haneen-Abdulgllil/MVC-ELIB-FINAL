<?php
namespace coding\app\controllers;

use coding\app\Models\User_payment_method;


class UserPaymentController extends Controller{

    function add_user_payment(){
        $this->view('add_user_payments');
    }
    function edituser_payment(){
        $this->view('edit_user_payment');
    }
    
    function user_payment(){
        $this->view('app-user_payment-list');
    } 
    public function delete(){
        
    }




}
?>