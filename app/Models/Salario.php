<?php


namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Salario extends Model{
    
    protected $table = 'tabulador';
    protected $fillable = [
        'empleo',
        'carrera',
        'experiencia',
        'unidad_tiempo',
        'monto_minimo',
        'monto_maximo',
        'unidad_monto',
        'activo',
        
    ];
    public function contactos()
    {
        return $this->hasMany(Contacto::class);
    }
}