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

    protected $guarded = [];
    protected $hidden = [];
    protected $casts = [
        'relatives' => 'array',
        'address' => 'array',
        'perma_address' => 'array',
        'emergency_contact' => 'array',
    ];
}
