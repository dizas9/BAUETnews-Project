<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    //sazid
    protected $fillable = [
        'name','slug',
    ];
    public function users(){
        return $this->hasMany('App\Models\User');
    }
    
}
