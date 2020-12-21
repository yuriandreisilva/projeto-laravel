<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }

    // Não precisamos importar address por conta do namespace
    public function address(){
        // return $this->hasOne(related: Address::class, foreignKey:'user', localKey:'id');
        // Laravel já pega automaticamente o campo de referência (chave estrangeira)
        // passando aqui para entender e reforçar
        return $this->hasOne(Address::class);
    }

    public function addresses(){
        // return $this->hasOne(related: Address::class, foreignKey:'user', localKey:'id');
        // Laravel já pega automaticamente o campo de referência (chave estrangeira)
        // passando aqui para entender e reforçar
        return $this->hasMany(Address::class);
    }

    public function post(){
        return $this->hasMany(Post::class);
    }
}
