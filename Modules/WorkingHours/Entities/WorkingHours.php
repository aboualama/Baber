<?php

namespace Modules\WorkingHours\Entities;

use Illuminate\Database\Eloquent\Model;

class WorkingHours extends Model
{ 
	
    protected $table = 'working_hours';
    public $timestamps = true;
 
    protected $fillable = ['worker_id', 'start_time', 'end_time', 'days'];


    public function worker()
    {
        return $this->belongsTo(User::class , 'worker_id');
}
