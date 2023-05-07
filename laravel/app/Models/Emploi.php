<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function classe(){
        return $this->belongsTo(Classe::class);
    }
    public function seance(){
        return $this->belongsTo(Seance::class);
    }
}
