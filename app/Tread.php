<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tread extends Model
{
    protected $guarded = [];

    public function path() 
    {
        return '/treads/'. $this->id;
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function addReply($reply)
    {
        $this->replies()->create($reply);

    }
}
