<?php

namespace Modules\Service\Entities;

use Illuminate\Database\Eloquent\Model;

class Service extends Model 
{

    protected $table = 'services';
    public $timestamps = true;
    protected $fillable = array('name', 'price');

    public function workers()
    {
        return $this->belongsToMany(User::class , 'service_worker' , 'service_id'  , 'worker_id');
    }

}