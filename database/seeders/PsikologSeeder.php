<?php

namespace Database\Seeders;

use App\Models\Psikolog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PsikologSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Psikolog::create([
            'name' => 'Sugeng Rahayu S.Psi., M.Psi.',
            'email' => 'example@gmail.com',
            'birthdate' => '1980-01-01',
            'code_psikolog' => 'rm280e',
            'last_education' => 'S2',
            'specialization_therapy' => 'Terapi Jiwa',
            'service_cost_perhour' => 900000,
        ]);
    }
}
