<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\login;
class login extends Model
{
        protected $fillable = ['email', 'senha'];

}
