<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    function createOrUpdategroup (Request $request) {
        if ($request["idGroup"] == null) {
            $group = new Group;
            $group->groupName = $request["groupName"];
            $group->isActive = 1; 
            $group->status = 1;
            $respuesta = $group->save();
            return $respuesta;
        }
        else {
            $group = Group::find($request["idGroup"]);
            $group->groupName = $request["groupName"];
            $respuesta = $group->save();
            return $respuesta;
        }

    }
    function getgroup ()  {
      $allgroup = Group::get();
      return $allgroup;
    }
}
