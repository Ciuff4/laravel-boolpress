<?php

namespace App;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'category_id',
    ];
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public static function slugGenerator($titleName){
        $c=0;
        $slug= Str::slug($titleName , '-');
        $slug_base = $slug;
        $find_post= Post::where('slug', $slug)->first();
        while ($find_post) {
        $slug= $slug_base . '_'. $c;
        $c++;
        $find_post= Post::where('slug', $slug)->first();
        }
        return $slug;
    }
}

