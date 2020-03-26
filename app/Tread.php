<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tread extends Model
{
    protected $guarded = [];

    public function path() 
    {
        //return '/treads/'.$this->chanel->slug.'/'.$this->id;
        //diubah menjadi
        return "/treads/{$this->chanel->slug}/{$this->id}";
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    
    public function chanel()
    {
        return $this->belongsTo(Chanel::class);
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