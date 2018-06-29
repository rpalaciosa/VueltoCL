<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mark;
use App\Http\Resources\Mark as MarkResource;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Obtenemos las marcas
        $marks = Mark::paginate(15);

        return MarkResource::collection($marks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
    {
        $mark = $request->isMethod('put') ? Mark::findOrFail($request->id_marca) : new Mark;

        $mark->id_marca = $request->input('id_marca');
        $mark->nombre = $request->input('nombre');
        $mark->descripcion = $request->input('descripcion');
		$mark->estado = $request->input('estado');
		$mark->logo = $request->input('logo');
		$mark->id_categoria = $request->input('id_categoria');
		$mark->url = $request->input('url');
		

        if($mark->save()) {
            return new MarkResource($mark);
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
        $mark = Mark::findOrFail($id);

        // Return single article as a resource
        return new MarkResource($mark);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
         $mark = Mark::findOrFail($id);

        if($mark->delete()) {
            return new MarkResource($mark);
        }  
    }
	
	public function dashboard()
    {
       return view('dashboard');
    }
	
	public function list()
    {
       return view('list');
    }
	
}
