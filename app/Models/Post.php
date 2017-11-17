<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
	*The attributes that are mass assignable.
	*
	*@var array
	*/
	protected $fillable = ['user_id', 'title', 'content'];
	
	/**
	 *The Eloquent users model name 
	 *
	 *@var string
	 */
	 protected static $userMOdel = 'App\Models\Users';
	 
    /**
	 *The Eloquent comment model name 
	 *
	 *@var string
	 */
	 protected static $commentsModel = 'App\Models\Comment';
	 
	 /**
	 *Returns the users relationship 
	 *
	 *@return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	 
	 
	 public function posts()
	 {
		 return $this->belongsTo(static::$postsModel,'user_id')
	 }
	 
	 
	 public function user()
	 {
		 return $this->belongsTo(static::$postsModel,'user_id')
	 }
	 
	 
	 /**
	 *Returns the comments relationship 
	 *
	 *@return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	 
	 
	 public function comments()
	 {
		 return $this->hasMany(static::$commentsModel,'post_id')
	 }
	 
	  /**
	 *Save post
	 *
	 * @param array $posts
	 * @return void
	 */
	 
	 public function savePost($post=array())
	 {
		 return $this->fill($post)->save();
	 }
	 
	 
	   /**
	 *Update post
	 *
	 * @param array $posts
	 * @return void
	 */
	 
	 public function updatePost($post=array())
	 {
		 return $this->upadate($post);
	 }
}
