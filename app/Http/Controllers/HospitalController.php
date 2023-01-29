<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Tymon\JWTAuth\Facades\JWTAuth;

class HospitalController extends Controller
{
    public $hospitalModel;
    function __construct()
    {
        $this->hospitalModel = new Hospital();
    }
    public function getAllHospitals()
    {
        try {
            $hospitals = $this->hospitalModel->getAllHospitalData();
            return apiResponse($hospitals, 'success', 'Successful', '', "");
        } catch (\Exception $e) {
            return apiResponse([], 'errors', $e->getMessage(), '');
        }
    }
}
