<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nucleo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'nucleos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'dependencia_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get dependencia for a nucleo.
     */
    public function dependencia()
    {
        return $this->belongsTo('App\Dependencia');
    }

    /**
     * The temas that belong to the nucleo.
     */
    public function temas()
    {
        return $this->belongsToMany('App\Tema')->withTimestamps();
    }
}
