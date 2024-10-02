<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settinges extends Model
{
    use HasFactory;
    protected $table = 'Settinges';
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'city',
        'statues',
        'file_path',
    ];

    
}
