<?php

namespace Modules\Service_worker\Entities;

use Illuminate\Database\Eloquent\Model;

class Service_worker extends Model 
{

    protected $table = 'service_worker';
    public $timestamps = true;
    protected $fillable = array('duration');

}