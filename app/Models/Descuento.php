<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    protected $table = 'descuento';

    protected $fillable = [
        'nombreDescuento',
        'fechaInicioDescuento',
        'fechaVencimientoDescuento',
        'valorDescuento',
        'descripcion',
    
    ];
    
    
    protected $dates = [
        'fechaInicioDescuento',
        'fechaVencimientoDescuento',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/descuentos/'.$this->getKey());
    }
}
