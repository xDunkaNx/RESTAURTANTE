<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
function createOrUpdateCategory (Request $request) {
    if ($request["idCategory"] == null) {
        $category = new Category;
        $category->categoryName = $request["categoryName"];
        $category->isActive = 1; 
        $category->status = 1;
        $respuesta = $category->save();
        return $respuesta;
    }
    else {
        $category = Category::find($request["idCategory"]);
        $category->categoryName = $request["categoryName"];
        $respuesta = $category->save();
        return $respuesta;
    }

} 
}
