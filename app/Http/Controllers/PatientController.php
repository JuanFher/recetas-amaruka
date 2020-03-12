<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::paginate(5);
        if (session('success_message')) {
            Alert::success('Operacion Exitosa', session('success_message'));
        }
        return view('patients.index', compact('patients'));
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
            'name.required' => 'Es necesario ingresar el nombre del doctor.',
            'lastname.required' => 'Es necesario ingresar el apellido del doctor.',
            'email.required' => 'Es necesario ingresar el email',
            'document.required' => 'Ingrese el número de documento',
            'phone.required' => 'Ingrese el número de teléfono',
        ];

        $rules = [
            
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'document' => 'required',
            'phone' => 'required',
        ];

       
        $this->validate($request, $rules, $messages );
        
        $doctor = new Patient;
        $doctor->name = $request->name;
        $doctor->lastname = $request->lastname;
        $doctor->email = $request->email;
        $doctor->type_document = $request->type_document;
        $doctor->document = $request->document;
        $doctor->address = $request->address;
        $doctor->phone = $request->phone;
        $doctor->home_phone = $request->home_phone;
        $doctor->age = $request->age;
        $doctor->save();

        if ($doctor) {
           
           return back()->withSuccessMessage('Se ha guardado con éxito');
        }
    }

   

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del doctor.',
            'lastname.required' => 'Es necesario ingresar el apellido del doctor.',
            'email.required' => 'Es necesario ingresar el email',
            'document.required' => 'Ingrese el número de documento',
            'phone.required' => 'Ingrese el número de teléfono',
        ];

        $rules = [
            
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'document' => 'required',
            'phone' => 'required',
        ];
        $this->validate($request, $rules, $messages );

        $patient = $patient->update($request->all());

        if ($patient) {
           
           return back()->withSuccessMessage('Se ha actualizado con éxito');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $delete = $patient->delete();
        if ($delete){
            
            return back()->withSuccessMessage('Se ha eliminado con éxito');
        }
    }
}
