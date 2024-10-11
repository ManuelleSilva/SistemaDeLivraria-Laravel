<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livraria extends Model
{
    use HasFactory;
    protected $primaryKey = 'idLivro';
    protected $fillable = [
        'nomeLivro',
        'edicaoLivro',
        'editoraLivro',
        'autorLivro'
    ];
}
