<?php

namespace Modules\Branch\Entities;

use Illuminate\Database\Eloquent\Model; 

class Branch extends Model 
{

    protected $table = 'branches';
    public $timestamps = true;
 
 
    protected $fillable = ['branch', 'open_time', 'close_time', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function workers()
    {
        return $this->hasMany(User::class , 'id' , 'worker_id');
    }

}