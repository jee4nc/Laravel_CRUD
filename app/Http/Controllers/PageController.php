<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Facade\FlareClient\Api;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function user_blade()
    {
        $oficios = App\Oficio::all();
        return view('users', compact('oficios'));
    }
    public function detail_user($id)
    {
        $oficio = App\Oficio::findOrFail($id);
        return view('oficio.details', compact('oficio'));
    }
    public function add_oficio(Request $request)
    {
        // return $request->all();
        $new_oficio = new App\Oficio;
        $new_oficio->name = $request->name;
        $new_oficio->description = $request->description;
        $new_oficio->save();
        return back()->with('message', 'Oficcio added');
    }
}