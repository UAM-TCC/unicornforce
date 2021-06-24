<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function users()
    {
        $users = DB::table('users')->paginate(10);

        return view('admin.users', ['users' => $users]);
    }

    public function toggleCategory($id)
    {
        $user = User::find($id);

        if ($user->category_id == 1) {
            $user->category_id = 2;
        } else {
            $user->category_id = 1;
        }

        if ($user->save()) {
            return back()->with('success', 'Sucesso ao mudar categoria.');
        }
        return back()->with('error', 'Erro ao mudar categoria.');
    }
}
