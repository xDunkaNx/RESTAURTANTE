<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    function createOrUpdateFeature (Request $request) {
        if ($request["idFeature"] == null) {
            $feature = new Feature();
            $feature->featureName = $request["featureName"];
            $feature->isActive = 1; 
            $feature->status = 1;
            $respuesta = $feature->save();
            return $respuesta;
        }
        else {
            $feature = Feature::find($request["idFeature"]);
            $feature->featureName = $request["featureName"];
            $respuesta = $feature->save();
            return $respuesta;
        }

    }
    function getFeatureName (Request $request)  {
      //se necesita buscar por nombre de Feature
      $value = $request["featureName"];
      return Feature::where("categoryName", 'like', '%'.$value.'%')->get(); 
    }
}
