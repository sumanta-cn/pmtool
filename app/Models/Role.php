<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'role';
    // public function user(){
    //     return $this->belongsTo(User::class , 'user_role');
    // }

    public function users(){
        return $this->hasMany(User::class);
    }
}
