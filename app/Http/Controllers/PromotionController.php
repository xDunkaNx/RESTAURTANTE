<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    function createOrUpdatepromotion (Request $request) {
        if ($request["idpromotion"] == null) {
            $promotion = new Promotion;
            $promotion->promotionName = $request["promotionName"];
            $promotion->isActive = 1; 
            $promotion->status = 1;
            $respuesta = $promotion->save();
            return $respuesta;
        }
        else {
            $promotion = Promotion::find($request["idPromotion"]);
            $promotion->promotionName = $request["promotionName"];
            $respuesta = $promotion->save();
            return $respuesta;
        }

    }
    function getPromotion ()  {
      $allpromotion = Promotion::get();
      return $allpromotion;
    }
}
