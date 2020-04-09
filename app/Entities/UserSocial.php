<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $timestamps = true;
    protected $table = 'users';
    //Campos definidos para passar por array valores inseridos no sistema
    protected $fillable = ['user_id','social_network','social_id','social_email'
,'social_avatar'];
    protected $hidden = [];
}

