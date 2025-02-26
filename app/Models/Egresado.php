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
    // Indicar que la clave primaria es 'matricula'
    protected $primaryKey = 'matricula';

    // Si la matrícula no es autoincremental, establece:
    public $incrementing = false;
    
    // Si la matrícula es de tipo string, puedes especificarlo
    protected $keyType = 'string';
    //agregado para editar 
    public function preparacion()
    {
        return $this->belongsTo(Preparacion::class, 'preparacion_id');
    }
    public function contactos()
    {
        return $this->hasMany(Contacto::class);
    }
}