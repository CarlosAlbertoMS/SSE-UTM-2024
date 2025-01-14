<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
   

    protected $fillable = ['empresa_id', 'nombre', 'puesto', 'telefono', 'correo'];

    public function empresa()
    {
        return $this->belongsTo(EmpresaAdmin::class);
    }
}
