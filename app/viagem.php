<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class viagem extends Model
{
    protected $table = 'viagens';

    public function User()
    {
        return $this->belongsTo(User::class);
    }


    public function local()
    {
        return $this->belongsTo(local::class);

    }



    // n : n
    public function prancha()
    {
        return $this->belongsToMany(prancha::class);
    }

}
