<?php

namespace App\Http\Controllers;

use App\Mail\Test;
use App\Models\Subtitulo;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SubtituloController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subtitulos = DB::table('subtitulos')->join('users', 'users.id', '=', 'subtitulos.user_id')
                                                ->select('subtitulos.*', 'users.name')
                                                ->paginate();
        //Mail::to('lihueamoroso@gmail.com')->send(new Test());
        //$subtitulos = Subtitulo::paginate(10);

        return view('home', ['subtitulos' => $subtitulos]);
    }

    public function show_details($id)
    {
        $subtitulo = DB::table('subtitulos')->join('users', 'users.id', '=', 'subtitulos.user_id')
                                                ->select('subtitulos.*', 'users.name')
                                                ->where('subtitulos.id', '=', $id)
                                                ->first();
        $subtitulo->created_at = (new Carbon($subtitulo->created_at))->format('d/m/Y');
        return view('subtitulo.detalle', ['subtitulo' => $subtitulo]);
    }
}
