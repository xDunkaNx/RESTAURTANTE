<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    function createOrUpdateCity (Request $request) {
        if ($request["idCity"] == null) {
            $city = new City;
            $city->cityName = $request["cityName"];
            $city->isActive = 1; 
            $city->status = 1;
            $respuesta = $city->save();
            return $respuesta;
        }
        else {
            $city = city::find($request["idCity"]);
            $city->cityName = $request["cityName"];
            $respuesta = $city->save();
            return $respuesta;
        }

    }
    function getAllCity ()  {
      $allCity = City::get();
      return $allCity;
    }
}
