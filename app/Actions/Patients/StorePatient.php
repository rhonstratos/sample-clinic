<?php
namespace App\Actions\Patients;

use App\Models\Patients;
use Illuminate\Http\Request;

class StorePatient
{
    public function handle(Request $request)
    {
        $sameAsAddress = $request->sameAsAddress == 1;

        return Patients::create([
            'fname' => $request->firstName,
            'mname' => $request->middleName,
            'lname' => $request->lastName,
            'bdate' => $request->bdate,
            'birth_place' => $request->bplace,
            'contact_num' => $request->contact,
            'nationality' => $request->occupation,
            'religion' => $request->religion,
            'civil_status' => $request->civilStatus,
            'sex' => $request->sex,
            'occupation' => $request->occupation,
            'address' => $request->address,
            'perma_address' =>
            $sameAsAddress
            ? $request->address
            : $request->permaAddress,
            'senior_num' => $request->seniorNumber,
            'relatives' => $request->relative,
            'emergency_contact' => $request->emergencyContact,
        ]);
    }
}
