<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function author()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function rating()
    {
        return $this->hasMany('App\Models\Rate', 'article_id');
    }

}
