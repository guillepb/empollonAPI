<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'respuestas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'texto', 'pregunta_id', 'es_correcta'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get pregunta for a respuesta.
     */
    public function pregunta()
    {
        return $this->belongsTo('App\Pregunta');
    }
}
