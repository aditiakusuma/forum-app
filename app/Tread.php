<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tread extends Model
{
    public function path() {
        return '/treads/'. $this->id;
    }
}
