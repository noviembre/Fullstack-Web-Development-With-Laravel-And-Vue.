<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body'];

    public function user() {
        return $this->belongsTo(User::class);
    }


     #================= Title Mutator
    #---for title slug
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = \Str::slug($value);
    }
    
}
