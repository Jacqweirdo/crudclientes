<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table='clientes';
    protected $primaryKey='Id';
    protected $fillable=['Nombre','Telefono','Correo'];
    protected $guarded=[];
    public $timestamps=false; //actualizacion

}
