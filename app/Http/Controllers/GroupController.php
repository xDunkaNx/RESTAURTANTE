<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    function createOrUpdategroup (Request $request) {
        try {
                $validatedData = $request->validate([
                    'groupName' => 'required|string|max:255',
                    'groupShortName' => 'required|string|max:255',
                    'isActive' => 'required|boolean|',
                    'status' => 'required|boolean|'
                ]);
                if ($request["idGroup"] == null) {
                    $group = new Group;
                    $group->groupName = $validatedData["groupName"];
                    $group->groupShortName = $validatedData["groupShortName"];
                    $group->isActive = $validatedData["isActive"]; 
                    $group->status = $validatedData["status"];
                    $group->save();      
                    return response()->json([
                        'status' => SELF::STATUS_TRUE,
                        'msg' => "Grupo de usuario creado correctamente",
                    ]);
                }
                else {
                    $group = Group::find($request["idGroup"]);
                    $group->groupName = $request["groupName"];
                    $group->groupName = $validatedData["groupShortName"];
                    $group->isActive = $validatedData["isActive"]; 
                    $group->status = $validatedData["status"];
                    $group->save();
                    return response()->json([
                        'status' => SELF::STATUS_TRUE,
                        'msg' => "Grupo de usuario modificado correctamente",
                    ]);
                }
        } catch (\Throwable $th) {
            throw $th;
        }

    }
    function getgroup ()  {
        try {
            $allgroup = Group::get();
            return $allgroup;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
