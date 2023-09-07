<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    //
    public function index(){
        $patients = Patient::all();
        return $patients;
    }


    //{"name": "Oliver", "age": 123}
public function store(Request $request){
    //ELOQUENT 

    $patient = Patient::create($request->all());
    return response()->json($patient, 201);
}

public function update(Request $request, string $id){


    
    $patient = Patient::findOrFail($id);
    $patient->update($request->all());
    return response()->json($patient,200);
}
}
