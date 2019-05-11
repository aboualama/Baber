<?php

namespace Modules\Payment\Entities;

use Illuminate\Database\Eloquent\Model; 

class Payment extends Model 
{

    protected $table = 'payments';
    public $timestamps = true;
 
    protected $fillable = array('name', 'client_id', 'amount');

    
    public function client()
    {
        return $this->belongsTo(User::class , 'client_id');
    }
    

}