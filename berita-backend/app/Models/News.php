<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "News";

    protected $fillable = [
        "title",   
        "author",
        "description",
        "content",
        "url",
        "url_image",
        "published_at",
        "category",
        "timestamp",
        ];
}
