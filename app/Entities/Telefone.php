<?php
/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 26/07/2016
 * Time: 23:47
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
      'descricão',
       'codpaís',
       'ddd',
       'prefixo',
       'sufixo'
    ];

    public function getNumeroAttribute()
    {
        return '{$this->codpaís} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}';
    }

}