<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'tipo_local_id'];

    public function tipoLocal()
    {
        return $this->belongsTo(TipoLocal::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
