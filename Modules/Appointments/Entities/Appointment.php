<?php

namespace Modules\Appointment\Entities;

use Illuminate\Database\Eloquent\Model; 

class Appointment extends Model 
{

    protected $table = 'appointments';
    public $timestamps = true;
 
 
    protected $fillable = array('client_id', 'worker_id', 'service_id', 'start_time', 'end_time', 'date', 'status', 'payment_id', 'amount');

    public function client()
    {
        return $this->belongsTo(User::class , 'client_id');
    }
    
    public function worker()
    {
        return $this->belongsTo(User::class , 'worker_id');
    }
    
    public function service()
    {
        return $this->belongsTo(Service::class , 'service_id');
    }
    
    public function payment()
    {
        return $this->belongsTo(Payment::class , 'payment_id');
    }
    

}