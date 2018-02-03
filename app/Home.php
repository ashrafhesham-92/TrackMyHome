<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public function members()
    {
        return $this->hasMany(User::class, 'home_id', 'id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
