<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\productController;
use App\Http\Controllers\Usercomment;
use Illuminate\Support\Facades\Route;

// admin pannel

// get Request Route


Route::group(['prefix' => '/admin'], function () {

    Route::get('/', function () {
        return view('./admin/index');
    });

    Route::get('/logout', function () {
         session()->invalidate();
         return redirect('./admin/');
    })->name('adminlogout');

    Route::get('/Dashborad', [productController::class, 'showproduct']);




    Route::get('/product', function(){

        $check= session()->has('adminuser');
               
        if($check){
            return view('./admin/product');
   }else{
     return  redirect('./admin/');
   }

     
    });

   

});

Route::get('/Blogedit/{id}', [productController::class, 'editblogs'])->where(['id'=>'[0-9]+']);  

Route::get('/blogDelete/{id}',  [productController::class, 'Deleteblog']);


Route::get('/', [productController::class, 'Home']);


Route::get('/blogpage/{id}', [productController::class, 'blogpage']);


// post request Route



Route::post('/adminlogin', [admincontroller::class, 'checkadmin']
)->name('adminlogin');

Route::post('/updateblog', [productController::class, 'updates']
)->name('updateblog');

Route::post('/addproduct', [productController::class, 'addproducts'])->name('productdata');


Route::post('/user', [Usercomment::class, 'create'])->name('user');