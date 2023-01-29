<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hospital extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'phone', 'facilities', 'country', 'state', 'city', 'address'];
    /**
     * @return object
     */
    function getAllHospitalData(): object
    {
        return Hospital::select("id", "name")->orderBy("id", "DESC")->get();
    }
}
