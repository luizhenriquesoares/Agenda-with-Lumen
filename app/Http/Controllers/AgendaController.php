<?php
/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 26/07/2016
 * Time: 23:29
 */

namespace App\Http\Controllers;

use App\Entities\Pessoa;

class AgendaController extends Controller
{
    public function index($letra = 'A')
    {
        $pessoas = Pessoa::all();
        return view('agenda', compact('pessoas'));
    }
}