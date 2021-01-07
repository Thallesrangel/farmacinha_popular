<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;

class ColaboradoresController extends Controller
{
    public function index()
    {   
        $data = Colaborador::get()->toArray();
        return view('colaboradores.index', ['dados' => $data]);
    }

    public function create()
    {
    
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

    public function destroy($id)
    {
    
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->get('ids');
        $all = implode(',', $ids);
        
        $dbs = Colaborador::whereIn('id_colaborador', explode(',', $all))->delete();
        
        return redirect(route('dashboard.colaborador'));
    }
}
