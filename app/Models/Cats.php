<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cats extends Model
{

protected $fillable = [
        'name',
        'age',
        'color',
        'emotion',
        'shelter_id'
    ];
    /** @use HasFactory<\Database\Factories\CatsFactory> */
    use HasFactory;

    public function shelter()
    {
        return $this->belongsTo(Shelter::class);
    }
}
