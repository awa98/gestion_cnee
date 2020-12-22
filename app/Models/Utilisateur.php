<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Utilisateur extends Model
{
   

    public $timestamps = false;
    protected $table = 'utilisateurs';

    protected $guarded = [];


    protected $fillable = [
        'name', 'email', 'password'];
}
