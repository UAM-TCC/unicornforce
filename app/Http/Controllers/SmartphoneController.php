<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Smartphone;
use App\UserSmartphone;
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

    public function requestSmartphone()
    {
        return view('smartphones.requestSmartphone');
    }

    public function createsSmartphoneSolicitation(Request $request)
    {
        $userSmartphone = new UserSmartphone();
        $userSmartphone->cep = $request->input('cep');
        $userSmartphone->state = $request->input('state');
        $userSmartphone->city = $request->input('city');
        $userSmartphone->neighborhood = $request->input('neighborhood');
        $userSmartphone->street = $request->input('street');
        $userSmartphone->number = $request->input('number');
        $userSmartphone->have_computer = $request->input('have_computer');
        $userSmartphone->have_cellphone = $request->input('have_cellphone');
        $userSmartphone->access_internet = $request->input('access_internet');
        $userSmartphone->subscription_reason = $request->input('subscription_reason');
        $userSmartphone->status = 1;
        $userSmartphone->user_id = Auth::user()->id;

        if ($userSmartphone->save()) {
            return redirect()->route('home')
                ->with('success', 'Requição solicitada com sucesso em breve entraremos em contato !');
        }

        return back()->with('error', 'Erro ao solicitar smartphone, Por favor tente novamente.');
    }

    public function viewSolicitations()
    {
        $userSmartphone = new UserSmartphone();

        $userSmartphone = $userSmartphone->with('user')->where('status', 1)->paginate(10);

        return view('smartphones.viewSolicitations', ['solicitations' => $userSmartphone]);
    }

    public function getSolicitations($id)
    {
        $userSmartphone = new UserSmartphone();

        $userSmartphone = $userSmartphone->where('id', $id)->with('user')->first();

        return response()->json([
            'status' => 'success',
            'solicitation' => $userSmartphone,
        ]);
    }

    public function setSolicitationValue($id, Request $request)
    {
        $status = 'success';
        $userSmartphone = UserSmartphone::find($id);
        $userSmartphone->status = $request->input('solicitation_value');

        if (!$userSmartphone->save()) {
            $status = 'error';
        }

        return response()->json([
            'status' => $status,
        ]);
    }
}
