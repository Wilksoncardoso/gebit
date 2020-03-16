<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prancha extends Model
{
    protected $table = 'pranchas';

    protected $fillable = ['user', 'tamanho'];
    
    
    
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function viagem()
    {
        return $this->belongsToMany(viagem::class);
    }

}
