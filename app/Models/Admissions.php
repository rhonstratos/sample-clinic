<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admissions extends Model
{
    use HasFactory;

    public function patient()
    {
        return $this->belongsTo(Patients::class);
    }

    protected $guarded = [];
    protected $hidden = [];
    protected $casts = [
        'admission' => 'array',
        'insurance' => 'array',
        'diagnosis' => 'array',
        'operation_procedure' => 'array',
        'alergy' => 'array',
        'admission_start' => 'date',
        'admission_end' => 'date',
    ];
}
