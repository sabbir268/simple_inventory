<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Supplying;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){ // this check if admin
        $user = Auth::user();
        if($user->role == 'admin'){ 
            return true;
        }
    }

    public function isSupplier(){ // this check if user
        $user = Auth::user();
        if($user->role == 'supplier'){ 
            return true;
        }
    }

    public function supplying(){
        return $this->hasMany(Supplying::class , 'user_id');
    }
}
