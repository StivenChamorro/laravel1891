<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function profile(){ 
        //$profile = Profile::where('user_id',$this->id)->first();
       return $this->hasOne('App\Models\Profile');
   }

   // Relacion Uno a Muchos con Post
   public function posts(){
    return $this->hasMany('App\Models\Post');//RECUPERAR LA COLECCION DE POST QUE PERTENECEN A ESTE USUARIO

    //relacion de muchos a muchos
   
}

public function roles(){
    return $this->belongsToMany('App\Models\Role');
}

}


