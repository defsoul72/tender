<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\Admin as Authenticatable;

class Admin extends Model
{
    use HasFactory;
}
// class Admin extends Authenticatable
//     {
//         use Notifiable;

//         protected $guard = 'admin';

//         protected $fillable = [
//             'name_Admin', 'email_Admin', 'password_Admin',
//         ];

//         protected $hidden = [
//             'password_Admin', 'remember_token',
//         ];
//     }
