<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function createOrUpdateProduct (Request $request) {
        if ($request["idproduct"] == null) {
            $product = new Product;
            $product->productName = $request["productName"];
            $product->isActive = 1; 
            $product->status = 1;
            $respuesta = $product->save();
            return $respuesta;
        }
        else {
            $product = Product::find($request["idProduct"]);
            $product->productName = $request["productName"];
            $respuesta = $product->save();
            return $respuesta;
        }

    }
    function getproduct ()  {
      $allproduct = Product::get();
      return $allproduct;
    }
}
