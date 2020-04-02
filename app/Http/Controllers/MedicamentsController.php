<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicament;

class MedicamentsController extends Controller
{
    public function affMedicament() {
        
        
        return view("pages/medicament", ["lesMedicaments" => medicament::all()]);
    }
}
