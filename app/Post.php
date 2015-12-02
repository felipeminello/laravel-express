<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['user_id', 'title', 'content'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function comments()
	{
		return $this->hasMany('App\Comment');
	}

	public function tags()
	{
		return $this->belongsToMany('App\Tag', 'posts_tags');
	}

	public function getTagListAttribute()
	{
		$tags = $this->tags()->lists('name')->all();

		return implode(', ', $tags);
	}
}
