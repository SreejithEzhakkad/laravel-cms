<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function childrens(){
        return $this->hasMany( 'App\Models\Page', 'parent', 'id' );
    }
      
    public function parent(){
        return $this->hasOne( 'App\Models\Page', 'id', 'parent' );
    }
}

