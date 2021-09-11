<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patients_file = file_get_contents('database/seeders/patients.json');
        $patients = json_decode($patients_file);
        
        foreach ($patients as $patient) {
            $payload = [
                'name' => $patient->name,
                'gender_id' => $patient->gender_id,
                'service_id' => $patient->service_id,
                'general_comments' => $patient->general_comments,
                'date_of_birth' => $patient->date_of_birth
            ];

            Patient::create($payload);
        }
    }
}
