<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
class AjaxController extends Controller
{
    public function approveuser(Request $request){
        $id = $request->id > 0 ? $request->id : 0;
        if($request->id > 0){
            $data= User::select('id','name','email','is_active','updated_at')->find($id);
            if(isset($data) && !empty($data)){
                $data->is_active= 1;
                $data->updated_at= date('Y-m-d H:i:s');
                $data->save();
                return response()->json(array('msg'=> 'Approved Successfully','icon'=>'success'), 200);
            }else{
                return response()->json(array('msg'=> 'User Not Found','icon'=>'error'), 404);
            }
        }else{
            return response()->json(array('msg'=> 'User Invalid','icon'=>'error'), 500);
        }
        return response()->json(array('msg'=> 'Method Not Accessible','icon'=>'warning'), 403);
    }
    public function addrole(Request $request){
        if(!$request->id || !$request->role_id || $request->role_id<0 ||$request->id<0){
            return response()->json(array('msg'=> 'Invalid User','icon'=>'error'), 500);
        }else{
            $userdata= User::find($request->id);
            if($userdata){
                $role=Role::find($request->role_id);
                if($role){
                    $userdata->role_id= $request->role_id;
                    $userdata->save();
                    return response()->json(array('msg'=> 'Approved Successfully','icon'=>'success'), 200);
                }else{
                    return response()->json(array('msg'=> 'Role Not Found','icon'=>'success'), 404);
                }
            }else{
                return response()->json(array('msg'=> 'User Not Found','icon'=>'error'), 404);
            }
        }
        return response()->json(array('msg'=> 'Method Not Accessible','icon'=>'warning'), 403);
    }
}
