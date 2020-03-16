<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class local extends Model
{
    protected $table = 'locais';

    public function viagem()
    {
        return $this->hasMany(viagem::class);
    }
}
