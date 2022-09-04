<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    function createOrUpdateDish (Request $request) {
        //en features se va colocar el id de los ingredientes que llevara dicho plato. con la finalidad que en el pato aparesca que contiene el plato

    }
    function getDish ()  {
        $allDishs = Dish::get();
        return $allDishs;
      }
  
      function getCategoryName (Request $request) {
          $value = $request["dishName"];
          return Dish::where("dishName", 'like', '%'.$value.'%')->get();
      }
}
