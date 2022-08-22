<?php

namespace App\Models;
use App\Http\Controllers\szakdogaController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class szakdoga extends Model
{
    use HasFactory;

   public function  szakdoga()
   {
        return $this->hasOne(Szakdogak::class, 'id', 'szakdoga_nev');

   }


}
