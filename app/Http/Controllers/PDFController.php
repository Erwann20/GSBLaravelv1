<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\rapport_visite;
use App\offrir;

class PDFController extends Controller {
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function generatePDF(int $id)
    
    {   
        
        $cptRendu= rapport_visite::where('RAP_NUM', $id )->get();
        $medoc =  offrir::where('RAP_NUM', $id )->get();
                
        $data = ['title' => $cptRendu];
        
        
        $pdf = PDF::loadView('pages/myPDF', $data);
        
        return $pdf->download('itsolutionstuff.pdf');
    }
    
    
}