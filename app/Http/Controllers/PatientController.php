<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    //
    public function index() {
        return Patient::with('gender', 'service')->all();
    }

    public function store(Request $request) {

        $validate = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'gender_id' => 'required',
            'date_of_birth' => 'required|date',
            'general_comments' => 'max:500'
        ]);

        if ($validate->fails()) {
            $response = [
                'status' => 'failed',
                'message' =>'Failed to create patient due to missing data.'
            ];

            return $response;
        } else {
            $patient = $request->all();
            Patient::create($patient); 

            return [
                'status' => 'success',
                'message' => "Patient succesfully created",
                'patient' => $patient,
            ];
        }
        
    }
}
