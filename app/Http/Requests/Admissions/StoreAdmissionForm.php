<?php

namespace App\Http\Requests\Admissions;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdmissionForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string','max:255, \Illuminate\Contracts\Validation\Rule','array','string','max:255>
     */
    public function rules(): array
    {
        return [
            // patient validation
            'firstName' => ['required', 'string', 'max:255'],
            'middleName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'suffix' => ['nullable', 'string', 'max:255'],
            'bdate' => ['required', 'date'],
            'bplace' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:255'],
            'nationality' => ['required', 'string', 'max:255'],
            'religion' => ['required', 'string', 'max:255'],
            'civilStatus' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:255'],

            'address' => ['required', 'array'],
            'address.*' => ['required', 'string', 'max:255'],

            'permanentAddress' => ['required', 'array'],
            'permanentAddress.*' => ['required', 'string', 'max:255'],
            'seniorNumber' => ['nullable', 'string', 'max:255'],

            'relatives' => ['required', 'array', 'min:1'],
            'relatives.*' => ['required', 'array'],
            'relatives.*.name' => ['required', 'string', 'max:255'],
            'relatives.*.address' => ['required', 'string', 'max:255'],
            'relatives.*.contact' => ['required', 'string', 'max:255'],

            'emergencyContact' => ['required', 'array'],
            'emergencyContact.*' => ['required', 'string', 'max:255'],


            // admission validaiton
            'wardRoom' => ['required', 'string', 'max:255'],
            'admissionType' => [' required', 'string', 'max:255'],

            'admission' => [' required', 'array', 'min:2'],
            'admission.*' => [' required', 'date'],

            'admittingPhysician' => ['required', 'string', 'max:255'],
            'admittingClerk' => ['required', 'string', 'max:255'],
            'refferedBy' => ['required', 'string', 'max:255'],
            'socialService' => ['required', 'string', 'max:255'],

            'alergy' => ['nullable', 'array'],
            'alergy.*' => ['nullable', 'string', 'max:255'],

            'insurance' => ['nullable', 'array'],
            'insurance.*' => ['nullable', 'string', 'max:255'],

            'diagnosis' => ['required', 'array'],
            'diagnosis.*' => ['required', 'array'],
            'diagnosis.*.other' => ['nullable', 'array'],

            'idcCode' => ['required', 'string', 'max:255'],
            'icpmCode' => ['required', 'string', 'max:255'],
            'operationProcedure' => ['nullable', 'array'],
            'operationProcedure.*' => ['nullable', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            // patient form validation error messages
            'firstName.required' => 'Patient\'s first name is required',
            'middleName.required' => 'Patient\'s middle name is required',
            'lastName.required' => 'Patient\'s last name is required',
            'bdate.required' => 'Patient\'s birth date is required',
            'bplace.required' => 'Patient\'s birth place is required',
            'contact.required' => 'Patient\'s contact no. is required',
            'nationality.required' => 'Patient\'s nationality is required',
            'religion.required' => 'Patient\'s religion is required',
            'civilStatus.required' => 'Patient\'s civil status is required',
            'sex.required' => 'Patient\'s sex is required',
            'occupation.required' => 'Patient\'s occupation is required',

            // 'address.required' => '',
            'address.street.required' => 'Street address is required',
            'address.barangay.required' => 'Barangay address is required',
            'address.city.required' => 'City address is required',
            'address.province.required' => 'Province address is required',

            // 'permanentAddress.required' => '',
            'permanentAddres.street.required' => 'Street address is required',
            'permanentAddres.barangay.required' => 'Barangay address is required',
            'permanentAddres.city.required' => 'City address is required',
            'permanentAddres.province.required' => 'Province address is required',

            'relatives.*.name.required' => 'Full name is required',
            'relatives.*.address.required' => 'Address is required',
            'relatives.*.contact.required' => 'Contact No. is required',

            'seniorNumber.required' => 'Senior number is required',

            // 'emergencyContact',
            'emergencyContact.firstName.required' => 'First name field is required',
            'emergencyContact.middleName.required' => 'Middle name field is required',
            'emergencyContact.lastName.required' => 'Last name field is required',
            'emergencyContact.suffix.required' => 'Suffix field is required',
            'emergencyContact.contact.required' => 'Contact No. field is required',
            'emergencyContact.address.required' => 'Address field is required',
            'emergencyContact.relationship.required' => 'Relationship field is required',

            // admission form validation error messages
            'wardRoom.required' => 'Patient\'s ward room is required',
            'admissionType.required' => 'Patient\'s admission type is required',

            // 'admission'
            'admission.start.required' => 'Admission date is required',
            'admission.end.required' => 'Discharge date is required',

            'admittingPhysician.required' => 'Admitting physician is required',
            'admittingClerk.required' => 'Admitting clerk is required',
            'refferedBy.required' => 'Reffered by is required',
            'socialService.required' => 'Social service is required',

            // 'alergy'
            'alergy.*.required' => 'Alergy is required',

            // 'insurance'
            'insurance.plan.required' => 'Insurance plan is required',
            'insurance.name.required' => 'Insurance name is required',
            'insurance.type.required' => 'Insurance type is required',

            // 'diagnosis'
            'diagnosis.initial.required' => 'Initial diagnosis is required',
            'diagnosis.principal.required' => 'Principal diagnosis is required',
            'diagnosis.other.required' => 'Other diagnosis is required',

            'idcCode.required' => 'IDC code is required',
            'icpmCode.required' => 'ICPM code is required',

            // 'operationProcedure'
            'operationProcedure.principal.required' => 'Principal operation procedure is required',
            'operationProcedure.other.required' => 'Other operation procedure is required',
        ];
    }
}
