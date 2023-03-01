<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('inscripcion');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        if($id=="1"){
            $ppa=65;
            //PUEDE LEVANTAR DOS MATERIAS (LEVANTAMIENTO)
            $materias = array(
                //SEMESTRE 1
                array("MAT101", "A", "A","1"),
                array("INF119", "A", "A","1"),
                array("INF110", "A", "A","1"),
                array("FIS100", "A", "A","1"),
                array("LIN100", "A", "A","1"),
                //SEMESTRE 2
                array("MAT102", "A", "A","2"),
                array("MAT103", "A", "A","2"),
                array("INF120", "A", "A","2"),
                array("FIS102", "A", "A","2"),
                array("LIN101", "A", "A","2"),
                //SEMESTRE 3
                array("MAT207", "A", "A","3"),
                array("INF210", "A", "A","3"),
                array("INF211", "A", "A","3"),
                array("FIS200", "A", "A","3"),
                array("ADM100", "A", "A","3"),
                //SEMESTRE 4
                array("MAT202", "I", "I","4"),
                array("MAT205", "I", "I","4"),
                array("INF220", "I", "I","4"),
                array("INF221", "I", "I","4"),
                array("ADM200", "A", "A","4"),
                //SEMESTRE 5
                array("MAT302", "NA", "IN","5"),
                array("INF318", "NA", "IN","5"),
                array("INF310", "NA", "IN","5"),
                array("INF312", "NA", "IN","5"),
                array("INF319", "NA", "IN","5"),
            );
        }else{
           
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
