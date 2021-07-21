<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(User $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection   {
       return $this->model->all();
   }

   public function get($id)   {
       return $this->model->all();
   }

   public function store(array $params)   {
       $user= new $this->model;
       foreach ($params as $key => $value) {
           $user->$key=$value;
       }
       $user->save;
       return response()->json(array('message'=>'Data Stored Successfully'));
   }

   public function update($id, array $params)   {

       return 'something';
   }

   public function delete($id)   {
       return $this->model->all();
   }

   public function checkAdmin(){
       return $this->model->with('roles')->whereHas('role', function($q){$q->where('role_name','=','Developer');})
       ->get();
   }
}
