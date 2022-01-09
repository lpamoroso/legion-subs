<?php

namespace App\Http\Controllers;

use App\Models\Subtitulo;
use Illuminate\Http\Request;

class SubtituloController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subtitulos = Subtitulo::paginate(10);

        return view('home', ['subtitulos' => $subtitulos]);
    }

    public function detalle($id)
    {
        # code...
    }
}
