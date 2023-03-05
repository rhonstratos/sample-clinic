<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    public function admission()
    {
        $this->hasMany(Admissions::class);
    }

    public function vitalSigns()
    {
        $this->hasMany(VitalSigns::class);
    }

    public function fluidIntakes()
    {
        $this->hasMany(FluidIntakes::class);
    }

    public function nursesNotes()
    {
        $this->hasMany(NursesNotes::class);
    }

    public function kardexes()
    {
        $this->hasMany(Kardexes::class);
    }

    public function dischargeSummary()
    {
        $this->hasMany(DischargeSummary::class);
    }

    public function physiciansOrders()
    {
        $this->hasMany(PhysiciansOrders::class);
    }

    protected $guarded = [];
    protected $hidden = [];
    protected $casts = [
        'relatives' => 'array',
        'address' => 'array',
        'perma_address' => 'array',
        'emergency_contact' => 'array',
    ];
}
