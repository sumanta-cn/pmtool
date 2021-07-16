<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
class AjaxController extends Controller
{
    public function approveuser(Request $request){
        $id = $request->id > 0 ? $request->id : 0;
        if($request->id > 0){
            $data= User::select('id','name','email','is_active')->find($id);
            if(isset($data) && !empty($data)){
                $data->is_active= 1;
                $data->save();
            }
            return response()->json(array('msg'=> 'approved successfully'), 200);
        }else{
            return response()->json(array('msg'=> $id), 500);
        }
        return response()->json(array('msg'=> $id), 200);
    }
}
