<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaAdmin extends Model
{


    protected $fillable = ['nombre', 'descripcion', 'rfc', 'sector','giro', 'telefono','correo','calle', 'numero', 'colonia', 'ciudad', 'estado', 'codigo_postal', 'pagina_web', 'imagen_url','motivo_no_contratacion', 'recomendaciones'];

    public function contactos()
    {
        return $this->hasMany(Contacto::class);
    }
}
