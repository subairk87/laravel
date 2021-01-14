<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];

    /**
     * Get the comments for the blog post.
     */
    // commeted it for temp
    /*public function comments() {
    	// return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    	return $this->hasMany(Comment::class);
    }*/

    /**
	 * Get the author of the post.
	 */
    public function user() {
    	return $this->belongsTo(User::class)->withDefault(['name' => 'Guest User']);
    }

    /**
     * Get the post's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

}
