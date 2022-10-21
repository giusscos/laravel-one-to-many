<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }

    static public function getUniqueSlug($param) {

        $slug_raw = Str::slug($param);
        $slug = $slug_raw;
        
        $slug_esistente = Post::where('slug', $slug)->first();
        
        $counter = 1;

        while($slug_esistente){

            $slug = $slug_raw . '-' . $counter;
            
            $slug_esistente = Post::where('slug', $slug)->first();

            $counter++;

        }

        return $slug;
    }
}
