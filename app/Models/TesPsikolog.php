<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesPsikolog extends Model
{
    use HasFactory;
    protected $fillable = [
        'soal',
        'jawaban1',
        'jawaban2',
        'jawaban3',
        'jawaban4',
        'point1',
        'point2',
        'point3',
        'point4',
    ];
}
