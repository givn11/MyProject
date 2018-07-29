<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'title', 'alias', 'description'
    ];

    /*public function user()
    {
        //return $this->hasOne(User::class, 'user_id', 'id');
        return $this->hasOne(User::class);
    }*/

    /*protected $guarded = [
        'title'
    ];*/
}
