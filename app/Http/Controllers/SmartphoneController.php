<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Smartphone;
use Auth;

class SmartphoneController extends Controller
{

    public function index()
    {
        $smartphones = DB::table('smartphones')->paginate(15);
        return view('smartphones.index', ['smartphones' => $smartphones]);
    }

    public function create()
    {
        return view('smartphones.create');
    }

    public function store(Request $request)
    {
        $smartphone = new Smartphone();
        $smartphone->model = $request->input('model');
        $smartphone->producer = $request->input('producer');
        $smartphone->color = $request->input('color');
        $smartphone->year_of_manufacture = $request->input('year_of_manufacture');
        $smartphone->picture = $request->file('picture')->store('imgs', 'public');
        $smartphone->created_by = Auth::user()->id;

        if ($smartphone->save()) {
            return redirect()->route('login')
                ->with('success', 'Celular cadastrado com sucesso');
        }

        return back()->with('error', 'Erro no cadastro do celular');
    }

    public function userSubsciption() {
        return view('smartphones.usersubscribe');
    }
}
