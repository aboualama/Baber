<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject; 

class User extends Authenticatable implements JWTSubject
{
    use Notifiable , SoftDeletes; 
 
 
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'api_token',
        'pin_code',
        'user_type',
        'status',
        'city_id',
        'branch_id', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array 
     */
    protected $hidden = [
        'password', 
        'remember_token',
        'api_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function city()
    {
        return $this->belongsTo(City::class);
    }


    public function branch()
    {
        return $this->belongsTo(Branch::class);
    } 

    
    public function hours()
    {
        return $this->hasMany(WorkingHours::class);
    }


    public function services()
    {
        return $this->belongsToMany(Service::class , 'service_worker'  , 'worker_id' , 'service_id');
    }
}
