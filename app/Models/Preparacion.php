<?php


namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Preparacion extends Model{
    protected $fillable = [
        'carrera',
        'generacion',
        'fecha_inicio',
        'fecha_fin',
        'promedio',
        'forma_titulacion',
        'fecha_titulo',
        
    ];
    public function contactos()
    {
        return $this->hasMany(Contacto::class);
    }
}