<?php

namespace App\Entities;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $timestamps = true;
    protected $table = 'users';
    //Campos definidos para passar por array valores inseridos no sistema
    protected $fillable = ['cpf','name','phone','birth', 'gender', 'notes','email', 'password','status', 'permission'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];

}
