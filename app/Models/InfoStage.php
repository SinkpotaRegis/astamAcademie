<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoStage extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'photo',
    ];
}
