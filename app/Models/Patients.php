<?php

namespace App\Models;

use App\Models\Traits\PatientRelationships;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Patients extends Model
{
    use HasFactory, PatientRelationships;

    public function fullName(): Attribute
    {
        return Attribute::make(
        get: function () {
            return Str::title(
                implode(
                    ' ',
                    array_filter(
                        [
                            $this->fname,
                            $this->mname,
                            $this->lname
                        ],
                        // remove middle name if blank
                        fn($item) => !empty($item) //shorthand function
                    )
                )
            );
        }
        );
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
