<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  {
    /**
	*The attributes that are mass assignable.
	*
	*@var array
	*/
	protected $fillable = ['user_id', 'post_id', 'content'];
	
	/**
	 *The Eloquent users model name 
	 *
	 *@var string
	 */
	 protected static $userMOdel = 'App\Models\Users';
	 
    /**
	 *The Eloquent posts model name 
	 *
	 *@var string
	 */
	 protected static $postsModel = 'App\Models\Post';
	 
	 /**
	 *Returns the users relationship 
	 *
	 *@return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	 
	 
	 public function user()
	 {
		 return $this->belongsTo(static::$usersModel,'user_id')
	 }
	 
	 
	 public function  post()
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
		 return $this->hasMany(static::$commentsModel,'user_id')
	 }
	 
	  /**
	 *Save Comment
	 *
	 * @param array $Comment
	 * @return void
	 */
	 
	 public function saveComment($comment=array())
	 {
		 return $this->fill($comment)->save();
	 }
	 
	 
	   /**
	 *Update post
	 *
	 * @param array $posts
	 * @return void
	 */
	 
	 public function updateComment($comment=array())
	 {
		 return $this->upadate($comment);
	 }
}

}
