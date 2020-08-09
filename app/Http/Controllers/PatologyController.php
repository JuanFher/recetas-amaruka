<?php

namespace App\Http\Controllers;

use App\Patology;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PatologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patologies = Patology::paginate(5);
        if (session('success_message')) {
            Alert::success('Operacion Exitosa', session('success_message'));
        }
        return view('patologies.index', compact('patologies'));
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
            'name.required' => 'Es necesario ingresar el nombre de la patología.',
            'description.required' => 'Es necesario ingresar la descripción de la patología.',
            
        ];

        $rules = [
            
            'name' => 'required',
            'description' => 'required '
            
        ];

        $this->validate($request, $rules, $messages );
        

         $patology = new Patology;
         $patology->name = $request->name;
         $patology->description = $request->description;
         $patology->status = $request->status;
         $patology->save();
        

        if ($patology) {
           
           return back()->withSuccessMessage('Se ha actualizó con éxito');
        }
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patology  $patology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patology $patology)
    {
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre de la patología.',
            'description.required' => 'Es necesario ingresar la descripción de la patología.',
            
        ];

        $rules = [
            
            'name' => 'required',
            'description' => 'required '
            
        ];

        $this->validate($request, $rules, $messages );
        

         
         $patology->name = $request->name;
         $patology->description = $request->description;
         $patology->status = $request->status;
         $patology->update();
        

        if ($patology) {
           
           return back()->withSuccessMessage('Se ha actualizó con éxito');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patology  $patology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patology $patology)
    {
        $delete = $patology->delete();
        if ($delete){
            
            return back()->withSuccessMessage('Se ha eliminado con éxito');
        }
    }
}
