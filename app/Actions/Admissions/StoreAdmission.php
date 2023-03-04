<?php
namespace App\Actions\Admissions;

use App\Models\{Admissions, Patients};
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreAdmission
{
    public function handle(Request $request, Patients $patient)
    {
        $admission_start_end_diff = $request->admission['start']->diffForHumans(
            $request->admission['end'],
            [
                'parts' => 6,
                'join' => ', ',
                'short' => true
            ]
        );
        return Admissions::create([
            'patient_id' => $patient->id,
            'ward_room' => $request->wardRoom,
            'type' => $request->admissionType,
            'admission_start' => $request->admission['start'],
            'admission_end' => $request->admission['end'],
            'admission_start_end_diff' => $admission_start_end_diff,
            'physician' => $request->admittingPhysician,
            'admitting_clerk' => $request->admittingClerk,
            'referred_by' => $request->refferedBy,
            'ssc' => $request->socialService,
            'alergy' => $request->alergy,
            'insurance' => $request->insurance,
            'diagnosis' => $request->diagnosis,
            'idc_code' => $request->idcCode,
            'icpm_code' => $request->icpmCode,
            'operation_procedure' => $request->operationProcedure,
        ]);
    }
}
