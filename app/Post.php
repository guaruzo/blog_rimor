<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $fillable=[

'user_id', 'category_id', 'name', 'slug', 'excerpt','body', 'status', 'file'

	];

	public function user(){

    	return $this->belongsTo(User::class);
    }

    public function category(){

    	return $this->belongsToMany(Category::class);
    }

    public function cags(){

    	return $this->belongsToMany(Tag::class);
    }
}
