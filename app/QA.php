<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class QA extends Model
{
    protected $fillable = ['Title','body'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['Title']=$value;
        $this->attributes['slug']=Str::slug($value);
    }

}
