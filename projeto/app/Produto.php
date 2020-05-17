<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function marca()
    {
        return $this->belongsTo('App\Marca');
    }

    public function departamentos() 
    {
        return $this->belongsToMany('App\Departamento',
                                    'produto_departamento');
    }
}
