<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRecords extends Model
{
    use HasFactory;
    public function patient()
    {
        $this->belongsTo(Patients::class);
    }

    protected $guarded = [];
    protected $hidden = [];
    protected $casts = [];
}
