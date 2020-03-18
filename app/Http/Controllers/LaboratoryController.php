<?php

namespace App\Http\Controllers;

use App\Laboratory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratories = Laboratory::paginate(5);
        if (session('success_message')) {
            Alert::success('Operacion Exitosa', session('success_message'));
        }
        return view('laboratories.index', compact('laboratories'));
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
        

         $laboratory = new Laboratory;
         $laboratory->name = $request->name;
         $laboratory->description = $request->description;
         $laboratory->address = $request->address;
         $laboratory->phone = $request->phone;
         $laboratory->save();
        

        if ($laboratory) {
           
           return back()->withSuccessMessage('Se ha actualizó con éxito');
        }
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laboratory $laboratory)
    {
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del laboratorio.',
        ];

        $rules = [
            'name' => 'required'
        ];

        $this->validate($request, $rules, $messages );

        $laboratory->name = $request->name;
        $laboratory->description = $request->description;
        $laboratory->address = $request->address;
        $laboratory->phone = $request->phone;
        $laboratory->update();

        if ($laboratory) {
           
           return back()->withSuccessMessage('Se ha actualizó con éxito');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratory $laboratory)
    {
        $delete = $laboratory->delete();
        if ($delete){
            
            return back()->withSuccessMessage('Se ha eliminado con éxito');
        }
    }
}
