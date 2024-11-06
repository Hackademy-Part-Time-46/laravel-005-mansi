<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $array = [
            ['name' => 'Scarpe da ginnastica', 'prezzo' => 67.00],
            ['name' => 'Scarpe da riposo', 'prezzo' => 1.00],
            ['name' => 'Scarpe da scalata', 'prezzo' => 167.00],
        ];

        $title = 'Homepage del mio sito';
        return view('welcome', ['array' => $array, 'title' => $title]);
    }
    public function contact()
    {
        return view('contatti');
    }

    public function detail($string)
    {
        $nome = 'francesco';
        return view('detail', [
            'string' => $string,
            'nome' => $nome
        ]);

        //return view('detail', compact('string', 'nome'));
    }
}
