<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cv.index');
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doc_format_valid = ["doc","docx","pdf"];
        $pic_format_valid = ["jpg","png"];
        date_default_timezone_set("America/Lima");
        $nombre = $request->input('name');
        $correo = $request->input('email');
        $documento = $request->file("document");
        $foto = $request->file("photo");
        $fecha_hora = date("Y-m-d H:i:s");
        $nombre_split = explode(" ",$nombre);
        $extension_documento = $documento->getClientOriginalExtension();
        $extension_foto = $foto->getClientOriginalExtension();
        $nombre_documento = "$nombre_split[0]"."$fecha_hora".".$extension_documento";
        $nombre_foto = "$nombre_split[0]"."$fecha_hora".".$extension_foto";
        foreach ($doc_format_valid as $doc) {
            if(in_array($extension_documento, $doc_format_valid)){
            break;
            }else{
                echo "Formato de documento no válido";
                exit();
            }
        }
        foreach ($pic_format_valid as $pic) {
            if(in_array($extension_foto,$pic_format_valid)){
            break;
            }else{
                echo "Formato de foto no válido";
                exit();
            }
        }
        \Storage::disk('public')->put($nombre_foto,\File::get($foto));
        \Storage::disk('public')->put($nombre_documento,\File::get($documento));
        echo "Archivos recibidos exitosamente :)";
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
    public function destroy($id)
    {
        //
    }
}
