<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';
    protected $guarded = [];

      protected $fillable = [
        'title', 'content', 'category_id','photo','slug',
    ];
    protected $dates =['deleted_at'];

    public function getphotoAttribute($photo)
    {
        return asset($photo);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    } //end relations category .

    public function tags(){
        return $this->belongsToMany('App\Tag');
    } //end relations tag .


    public function getphotoPathAttribute()
    {
        return asset('uploads/posts/' . $this->photo);

    }//end of photo path attribute


}
