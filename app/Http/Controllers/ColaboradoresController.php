<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;

class ColaboradoresController extends Controller
{
    public function index()
    {   
        $data = Colaborador::paginate(10);
        return view('colaboradores.index', ['dados' => $data]);
    }

    public function create()
    {
        return view('colaboradores.register');
    }

    public function store(Request $request)
    {
    
    }

    public function show($id)
    {
    
    }

    public function edit($id)
    {
    
    }

    public function update(Request $request, $id)
    {
    
    }

    public function delete($idColaborador)
    {
        $data = Colaborador::findOrFail($idColaborador);
        $data->delete();
        
        return redirect()->route('dashboard.colaborador');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->get('ids');
        $all = implode(',', $ids);
        
        $dbs = Colaborador::whereIn('id_colaborador', explode(',', $all))->delete();
        
        return redirect(route('dashboard.colaborador'));
    }
}
