<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phn_no',
        'resume',
    ];
}
