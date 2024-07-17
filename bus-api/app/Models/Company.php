<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'brand_name', 'contact_name', 'email', 'website'];

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }
}
