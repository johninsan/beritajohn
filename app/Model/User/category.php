<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function categories()
    {
        return $this-> belongsToMany('App\Model\User\post','category_posts')->orderBy('created_at','DESC')->paginate(5);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
