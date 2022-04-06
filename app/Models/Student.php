<?php

namespace App\Models;

use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'section_id',
        'std_id',
        'grade',
        'image',

    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
