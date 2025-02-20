<?php


namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Egresado extends Model{
    protected $fillable = [
        'matricula',
        'ap_paterno',
        'ap_materno',
        'nombres',
        'curp',
        'genero',
        'fecha_nacimiento',
        'nacionalidad',
        'telefono',
        'lugar_origen',
        'direccion_actual',
        'imagen_url',
        'cv_url'
    ];
    public function contactos()
    {
        return $this->hasMany(Contacto::class);
    }
}