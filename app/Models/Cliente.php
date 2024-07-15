<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $fillable = [
        'nombre',
        'celular',
        'email',
        'fechaInicio',
        'fechaFin',
        'valorTotal',
        'membresia_id',
        'descuento_id',
    
    ];
    
    
    protected $dates = [
        'fechaInicio',
        'fechaFin',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/clientes/'.$this->getKey());
    }
}
