<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;
class AutoController extends Controller
{
    
    public function index()
    {
        $autos = Auto::all();
        $datos = array('autos' => $autos);
        return view('auto.show',$datos);
    }

    
    public function create()
    {
        return view('auto.create');   
 }

   
    public function store(Request $request)
    {
        $auto = new Auto;
$auto->placa = $request->input('placa');
$auto->color = $request->input('color');
$auto->save();
return redirect('auto/show');

    }

   
    public function show($id)
    {
        //
    }
    //vista
    public function edit($id)
    {
        $auto = Auto::find($id);
    $datos = array('placa' => $auto->placa, 'color' => $auto->color,'id' => $auto->id);
    return view('auto.edit')->with($datos);
    }
    //ya guardar
    public function update(Request $request)
    {
        $auto = Auto::find($request->input('id'));
        $auto->placa = $request->input('placa');
        $auto->color = $request->input('color');
        $auto->save();  
              return redirect('auto/show');
       
    }

    public function destroy($id)
    {
        Auto::destroy($id);
return redirect('auto/show');
    }
}
