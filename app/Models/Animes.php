<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animes extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'animes';

    protected $fillable = [
        'title',
        'short_description',
        'release_year',
        'studio',
        'creator',
    ];
}
