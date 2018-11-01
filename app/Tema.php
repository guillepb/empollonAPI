<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'temas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get preguntas for a tema.
     */
    public function preguntas()
    {
        return $this->hasMany('App\Pregunta');
    }

    /**
     * The nucleos that belong to the tema.
     */
    public function nucleos()
    {
        return $this->belongsToMany('App\Nucleo')->withTimestamps();
    }

}
