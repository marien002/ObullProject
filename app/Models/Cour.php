<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{

    protected $fillable = [
        'intitule'
     ];

    use HasFactory;
}
