<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    public $timestamaps=false;
    protected $fillable = [
        'identifier',
        'title',
        'price',
        'description',
        'delivery_date',
    ];
}
