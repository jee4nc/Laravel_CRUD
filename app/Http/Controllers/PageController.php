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
        $oficios = App\Oficio::paginate(5);
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
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $new_oficio = new App\Oficio;
        $new_oficio->name = $request->name;
        $new_oficio->description = $request->description;
        $new_oficio->save();
        return back()->with('message', 'Oficcio added');
    }
    public function update_oficio($id)
    {
        $oficio = App\Oficio::FindOrFail($id);
        return view('oficio.update', compact('oficio'));
    }
    public function task_update_oficio(Request $request, $id)
    {
        $oficioUpdate = App\Oficio::findOrFail($id);
        $oficioUpdate->name = $request->name;
        $oficioUpdate->description = $request->description;
        $oficioUpdate->save();
        return back()->with('message_update', 'Oficio updated');
    }
    public function methodDeleteOficio($id)
    {
        $oficioDelete = App\Oficio::findOrFail($id);
        $oficioDelete->delete();
        return back()->with('deleteMessage', 'Oficio deleted');
    }
}