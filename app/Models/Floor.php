<?php

namespace App\Models;

use App\Models\Building;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Floor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'raspberry_pi_ip_address', 'building_id'];

    public function building(){
       return $this->belongsTo(Building::class);
    }
}
