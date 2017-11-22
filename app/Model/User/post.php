<?php

namespace App\Model\User;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags()
    {
        return $this-> belongsToMany('App\Model\User\tag','post_tags')->withTimestamps();
    }
    public function categories()
    {
        return $this-> belongsToMany('App\Model\User\category','category_posts')->withTimestamps();
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

    public function  likes(){
        return $this->hasMany('App\Model\User\like');
    }
    public function getSlugAttribute($value){
        return route('post',$value);
    }
}
