<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class galery extends Model
{
    use HasFactory;
    protected $fillable = [
        'hari',
        'tipe',
        'gambar'
    ];
}