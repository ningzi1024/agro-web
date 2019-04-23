<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function sorts(){
        return $this->hasOne(Sort::class, 'sort_id');
    }
}
