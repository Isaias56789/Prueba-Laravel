<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Computer extends Model
{
    use HasFactory;

    /**
     * Casting de atributos.
     */
    protected $casts = [
        'published_at' => 'datetime', // Se establece que devolverá DATETIME
        'is_active' => 'boolean'      // Se establece que devolverá BOOLEAN
    ];

    /**
     * Accesor y mutador para el atributo 'model'.
     */
    protected function model(): Attribute
    {
        return Attribute::make(
            set: function (string $value) {
                return strtolower($value);
            },
            get: function (string $value) {
                return strtoupper($value);
            }
        );
    }
}
