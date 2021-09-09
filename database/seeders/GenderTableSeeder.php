<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Gender::create([
            'gender' => 'male'
        ]);

        Gender::create([
            'gender' => 'female'
        ]);
    }
}
