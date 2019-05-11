<?php

namespace Modules\City\Entities;

use Illuminate\Database\Eloquent\Model;

class City extends Model 
{

    protected $table = 'cities';
    public $timestamps = true;
    protected $fillable = array('name');

    public function client()
    {
        return $this->hasMany(User::class);
    }

    public function branch()
    {
        return $this->hasMany(Branch::class);
    }

}