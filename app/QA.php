<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QA extends Model
{
    protected $fillable = ['Title','body'];
    
    public function user(){
        return $this->belongTo(User::class);
    }
}
