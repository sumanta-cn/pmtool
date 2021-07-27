<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Project;
use App\Models\Work;
class HomeController extends Controller
{

    public function index(){
        $alluser= User::get()->where('role_id','!=','1')->count();
        $devuser= User::with('role')->
        whereHas('role', function($q){$q->where('role_name','=','Developer');})
        ->get()->count();
        $pmuser= User::with('role')->
        whereHas('role', function($q){$q->where('role_name','=','Project_Manager');})
        ->get()->count();
        $cuser= User::with('role')->
        whereHas('role', function($q){$q->where('role_name','=','Client');})
        ->get()->count();
        $projects= Project::get()->where('status','=','1')->count();
        $works= Work::get()->where('is_active','=','1')->count();
        $data= array('user'=>$alluser,'developer'=>$devuser,'pm'=>$pmuser,'client'=>$cuser,'works'=>$works,'projects'=>$projects);
        return view('home',['data'=>$data]);
    }

    public function userlist(){
        $users= User::select('id','email','name','created_at')->where('role_id','!=','1')->where('is_active','!=','1')->get();
        return view('userlist',['users'=>$users]);
    }

    public function assignrole(){
        $users= User::select('id','email','name','Updated_at')->where([['role_id','=','0'],['is_active','=','1']])->get();
        $roles= Role::select('id','role_name')->where('role_name','!=','Admin')->get();
        return view('assignrole',['users'=>$users,'roles'=>$roles]);
    }
    public function addwork(Request $request){

        $file = new Project;

        if($request->file()) {
            $name = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $name, 'public');

            $file->name = time().'_'.$request->file->getClientOriginalName();
            $file->file = '/storage/' . $filePath;
            $file->save();
        }
        return view('addwork');
    }

}
