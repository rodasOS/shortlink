<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrlShortener extends Model
{
    //

    protected $fillable = [
        'url', 'shortened_url'
    ];

}
