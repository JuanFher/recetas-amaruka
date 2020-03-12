<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::paginate(5);
        if (session('success_message')) {
            Alert::success('Operacion Exitosa', session('success_message'));
        }
        return view('units.index', compact('units'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del laboratorio.',
        ];

        $rules = [
            'name' => 'required'
        ];

        $this->validate($request, $rules, $messages );

         $unit = new Unit;
         $unit->name = $request->name;
         $unit->simbol = $request->simbol;
         $unit->save();
        

        if ($unit) {
           
           return back()->withSuccessMessage('Se ha creado con éxito');
        }
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del laboratorio.',
        ];

        $rules = [
            'name' => 'required'
        ];

        $this->validate($request, $rules, $messages );

         $unit->name = $request->name;
         $unit->simbol = $request->simbol;
         $unit->update();
        

        if ($unit) {
           
           return back()->withSuccessMessage('Se ha creado con éxito');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
