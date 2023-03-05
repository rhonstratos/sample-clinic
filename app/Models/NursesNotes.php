<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NursesNotes extends Model
{
    use HasFactory;

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    protected $guarded = [];
    protected $hidden = [];
    protected $casts = [];
}
