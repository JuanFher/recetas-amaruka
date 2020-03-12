<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::paginate(5);

        return view('doctors.index', compact('doctors'));
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
        
        $doctor = new Doctor;
        $doctor->name = $request->name;
        $doctor->lastname = $request->lastname;
        $doctor->email = $request->email;
        $doctor->type_document = $request->type_document;
        $doctor->document = $request->document;
        $doctor->address = $request->address;
        $doctor->phone = $request->phone;
        $doctor->home_phone = $request->home_phone;
        $doctor->title = $request->title;
        $doctor->save();

        if ($doctor) {
           
           return back()->withSuccessMessage('Se ha guardado con éxito');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $delete = $doctor->delete();
        if ($delete){
            
            return back()->withSuccessMessage('Se ha eliminado con éxito');
        }
    }
}
