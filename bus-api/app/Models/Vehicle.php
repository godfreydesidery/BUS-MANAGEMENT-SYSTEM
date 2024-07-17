<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['registration_no'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
