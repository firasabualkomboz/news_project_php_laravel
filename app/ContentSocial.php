<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentSocial extends Model
{
    protected $table = 'content_socials';
    protected $guarded = [];

      protected $fillable = [
        'name', 'url',
    ];


}
