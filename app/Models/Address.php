<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'addresses';

    // passar direto só para entender o conceito, sem view
    // semântica:
    // caminho de ida método hasOne()
    // caminho de volta belongsTo()
    public function user(){
        return $this->belongsTo(User::class);
    }

}
