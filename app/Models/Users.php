<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;


class Users extends EloquentUser
{
    /**
	 *The Eloquent post model name 
	 *
	 *@var string
	 */
	 protected static $postMOdel = 'App\Models\Post';
	 
    /**
	 *The Eloquent comment model name 
	 *
	 *@var string
	 */
	 protected static $commentsMOdel = 'App\Models\Comment';	 
	 
	 
	 
    /**
	 *Returns the posts relationship 
	 *
	 *@return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	 
	 
	 public function posts()
	 {
		 return $this->hasMany(static::$postsModel,'user_id')
	 }
	 
	 /**
	 *Returns the comments relationship 
	 *
	 *@return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	 
	 
	 public function comments()
	 {
		 return $this->hasMany(static::$commentsModel,'user_id')
	 }
}


