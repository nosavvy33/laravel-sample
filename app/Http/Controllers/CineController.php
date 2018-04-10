<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo 'holi bolis';
        return view('cine');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vender(Request $request)
    {	
    	/*echo "Con post['edad']".$_POST["edad"];
    	echo "</br>Con request->input('edad')".$request->input('edad');    	
    	echo "</br>Con request->edad".$request->edad;
        echo '</br>holis';
       //  echo "</br>vardumpin request".var_dump($request);
        echo "<br>vardumpin post".var_dump($_POST);*/
        $e = $request->input('edad');
        $c = $request->input('est');
        /*if($e>12 || $c == 'S'){
        	echo 'Paga 3 soles';
        }*/
        echo ($e>12 || $c == 'S'? 'Paga 3 soles' :  'Paga más');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
