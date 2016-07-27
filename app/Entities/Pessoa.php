<?php
/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 26/07/2016
 * Time: 23:45
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones()
    {
        return $this->hasMany(Telefone::class);
    }
}