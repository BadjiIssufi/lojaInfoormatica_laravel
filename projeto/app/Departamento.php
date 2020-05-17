<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{

    public function produtos() 
    {
        return $this->belongsToMany('App\Produto',
                                    'produto_departamento');
    }

}
