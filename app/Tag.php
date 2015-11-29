<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
	public $timestamps = false;


    public function tags()
    {
        return $this->belongsToMany('App\Post', 'posts_tags');
    }
}
