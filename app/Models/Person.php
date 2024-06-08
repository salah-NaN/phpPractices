<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pet;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age'
    ];

    public $timestamps = false;
    /**
     * Get all of the pets for the Person
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pets(): HasMany
    {
        return $this->hasMany(Pet::class, 'person_id', 'id');
    }
}
