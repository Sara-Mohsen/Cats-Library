<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{

    protected $fillable = [
        'file_number',
        'description',
        'breed'
    ];
    /** @use HasFactory<\Database\Factories\ShelterFactory> */
    use HasFactory;

    public function cats()
    {
        return $this->hasMany(Cats::class);
    }
}
