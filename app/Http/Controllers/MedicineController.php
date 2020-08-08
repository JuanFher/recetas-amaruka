<?php

namespace App\Http\Controllers;

use App\Laboratory;
use App\Medicine;
use App\Unit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratories = Laboratory::all();
        $units = Unit::all();
        $medicines = Medicine::paginate(5);
        if (session('success_message')) {
            Alert::success('Operacion Exitosa', session('success_message'));
        }
        return view('medicines.index', compact('medicines', 'laboratories', 'units'));
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
            'description.required' => 'Es necesario la descripción',
            'unit_id.required' => 'Es necesaria la unidad de medida',
            'container.required' => 'El contenido es requerido',
            'laboratory_id.required' => 'Seleccione un laboratorio',
            'compound.required' => 'Ingrese la composicion del medicamento'
            
        ];

        $rules = [
            
            'name' => 'required',
            'description' => 'required',
            'unit_id' => 'required',
            'container' => 'required',
            'laboratory_id' => 'required',
            'compound' => 'required',

            
        ];

        $this->validate($request, $rules, $messages );

        $medicine = New Medicine;
        $medicine->name = $request->name;
        $medicine->description = $request->description;
        $medicine->unit_id = $request->unit_id;
        $medicine->container = $request->container;
        $medicine->laboratory_id = $request->laboratory_id;
        $medicine->compound = $request->compound;
        $medicine->save();

        if ($medicine) {
           
           return back()->withSuccessMessage('Se ha creado con éxito');
        }
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del laboratorio.',
            'description.required' => 'Es necesario la descripción',
            'unit_id.required' => 'Es necesaria la unidad de medida',
            'container.required' => 'El contenido es requerido',
            'laboratory_id.required' => 'Seleccione un laboratorio',
            'compound.required' => 'Ingrese la composicion del medicamento'
            
        ];

        $rules = [
            
            'name' => 'required',
            'description' => 'required',
            'unit_id' => 'required',
            'container' => 'required',
            'laboratory_id' => 'required',
            'compound' => 'required',

            
        ];

        $this->validate($request, $rules, $messages );

        
        $medicine->name = $request->name;
        $medicine->description = $request->description;
        $medicine->unit_id = $request->unit_id;
        $medicine->container = $request->container;
        $medicine->laboratory_id = $request->laboratory_id;
        $medicine->compound = $request->compound;
        $medicine->update();

        if ($medicine) {
           
           return back()->withSuccessMessage('Se ha creado con éxito');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        $delete = $medicine->delete();
        if ($delete){
            
            return back()->withSuccessMessage('Se ha eliminado con éxito');
        }
    }
}
