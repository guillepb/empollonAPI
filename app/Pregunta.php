<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'preguntas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'texto', 'tema_id', 'referencia'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get tema for a pregunta.
     */
    public function tema()
    {
        return $this->belongsTo('App\Tema');
    }

    /**
     * Get respuestas for a pregunta.
     */
    public function respuestas()
    {
        return $this->hasMany('App\Respuesta');
    }

}
