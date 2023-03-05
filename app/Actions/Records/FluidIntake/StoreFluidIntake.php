<?php

namespace App\Actions\Records\FluidIntake;

use App\Models\FluidIntake;
use App\Models\Patients;
use Illuminate\Http\Request;

class StoreFluidIntake
{
    public function handle(Patients $patient, Request $request)
    {
        return FluidIntake::create([
            'patient_id' => $patient->id,
            'time' => $request->time,
            'oral' => $request->oral,
            'parental' => $request->parental,
            'intake_total' => $request->intake_total,
            'urine' => $request->urine,
            'drainage' => $request->drainage,
            'others' => $request->others,
            'output_total' => $request->output_total,
        ]);
    }
}
