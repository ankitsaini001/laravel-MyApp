<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class SignUp extends Model
{
    use HasApiTokens;

    // Define the table associated with the model
    protected $table = 'sign_ups';
    // Define the fillable attributes
    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'password',
        'terms',
    ];
}
