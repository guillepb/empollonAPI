<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dependencias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'icaocode', 'nombre'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get nucleos for a dependencia.
     */
    public function nucleos()
    {
        return $this->hasMany('App\Nucleo');
    }
}
