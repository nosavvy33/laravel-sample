<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubirArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('archivos.subir_archivo');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codigo = $request->input("codigo");
        $foto = $request->file("archivo");
        $extension = $foto->getClientOriginalExtension();
        $finalname = "$codigo.$extension";
        \Storage::disk('public')->put($finalname,\File::get($foto));
        if($extension == 'jpg'){
        	echo '<img src="/storage/'.$finalname.'" />';
        }else{
        	echo $finalname;	
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nom)
    {
    	//si se quiere organizar mejor creando una carpeta dentro de public/
    	//indicar esa carpeta en un path
    	// $path = "foldername".$nom;
    	//\Storage::disk('public')->delete($path);
        \Storage::disk('public')->delete($nom);
        echo "Archivo $nom eliminado";
    }
}
