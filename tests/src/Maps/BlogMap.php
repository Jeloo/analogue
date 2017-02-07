<?php

namespace TestApp\Maps;

use Analogue\ORM\EntityMap;
use TestApp\Article;
use TestApp\Blog;
use TestApp\User;
use TestApp\Comment;

class BlogMap extends EntityMap
{
    public $timestamps = true;

    public function user(Blog $blog)
    {
        return $this->belongsTo($blog, User::class);
    }

    public function articles(Blog $blog)
    {
        return $this->hasMany($blog, Article::class);
    }

    public function comments(Blog $blog)
    {
    	return $this->morphMany($blog, Comment::class, 'commentable');
    }
}
