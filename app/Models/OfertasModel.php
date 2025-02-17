<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaAdmin extends Model
{


     protected $fillable = [
        'titulo',
        'categoria',
        'ubicacion',
        'tiempo_publicacion',
        'descripcion',
        'empresa',
        'imagen_url',
        'solicitantes',
    ];

    public function contactos()
    {
        return $this->hasMany(Contacto::class);
    }
}


 

