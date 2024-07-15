<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membresium extends Model
{
    protected $fillable = [
        'nombreMembresia',
        'tipoMembresia',
        'valorMembresia',
        'descripcionMembresia',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/membresia/'.$this->getKey());
    }
}
