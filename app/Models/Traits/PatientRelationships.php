<?php

namespace App\Models\Traits;

use App\Models\{
    Admissions,
    DischargeSummary,
    FluidIntake,
    Kardexes,
    NursesNotes,
    VitalSigns,
    PhysiciansOrders
};

trait PatientRelationships
{
    public function admission()
    {
        return $this->hasOne(Admissions::class, 'patient_id')->latestOfMany();
    }
    public function admissions()
    {
        return $this->hasMany(Admissions::class, 'patient_id');
    }

    public function vitalSigns()
    {
        return $this->hasMany(VitalSigns::class, 'patient_id');
    }

    public function fluidIntake()
    {
        return $this->hasMany(FluidIntake::class, 'patient_id');
    }

    public function nursesNotes()
    {
        return $this->hasMany(NursesNotes::class, 'patient_id');
    }

    public function kardexes()
    {
        return $this->hasMany(Kardexes::class, 'patient_id');
    }

    public function dischargeSummary()
    {
        return $this->hasMany(DischargeSummary::class, 'patient_id');
    }

    public function physiciansOrders()
    {
        return $this->hasMany(PhysiciansOrders::class, 'patient_id');
    }
}
