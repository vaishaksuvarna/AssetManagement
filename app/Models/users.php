<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
   
    protected $fillable = [
        'employee_id' ,
        'employee_name' ,
        'department',
        'designation', 
        'mobile_number',  
        'email', 
        'user_name', 
        'password',
        'blocked'
        
    ];
 
     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
       
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}