<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    // Controller methods would go here
    function getSeller(){
        return Seller::find(100)->productData;  
    }

    function getSellerWithProduct(){
        return Seller::find(100)->productsData;
    }

    function getSellerWithProductDetails(){
       // return "many to one relationship";
       $data = Product::with('seller')->get();
       return $data;
    }
}
