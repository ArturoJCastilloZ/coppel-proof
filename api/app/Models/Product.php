<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'sku',
        'articulo',
        'marca',
        'modelo',
        'departamento',
        'clase',
        'familia',
        'stock',
        'cantidad',
        'descontinuado',
        'baja'
    ];
    // Indica que el objeto distintivo es el sku y no el id.
    protected $primaryKey = 'sku';
    const DATE_DEFAULT = '1900-01-01';
    protected $attributes = [
        'baja' => self::DATE_DEFAULT,
    ];
}
