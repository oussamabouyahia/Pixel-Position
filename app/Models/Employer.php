<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    function jobs(){
        $this->hasMany(Job::class);
    }
}
