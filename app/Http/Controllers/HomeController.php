<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\praticien;
use App\visiteur;
use App\medicament;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function profil() {
        $idUser = Auth::user()->mat;
        $visiteur  = visiteur::where('VIS_MATRICULE', $idUser )->get();  
        
        
        return view('pages/profil',["lesVisiteurs" => $visiteur], ["user" => Auth::user()]);
    }
    
    public function praticien(Request $request) {
        
        $nom = $request->input('nom');
        $profession = $request->input('profession');
        $ville = $request ->input('ville');
        
        $reqData = DB::table('praticiens')
        ->join('type_praticien', 'praticiens.typ_code', '=', 'type_praticien.typ_code')
        ->select('praticiens.*', 'type_praticien.*')
        ->get();
        
           
                 $req=[];
                            
                    if ($nom!="") {
                         $req = DB::table('praticiens')
                         ->join('type_praticien', 'praticiens.typ_code', '=', 'type_praticien.typ_code')
                         ->select('praticiens.*', 'type_praticien.*')
                         ->where('praticiens.pra_nom','=',$nom) 
                         ->get();
                         
                         
                     } else if ($ville!="...") {
                         
                         $req = DB::table('praticiens')
                         ->join('type_praticien', 'praticiens.typ_code', '=', 'type_praticien.typ_code')
                         ->select('praticiens.*', 'type_praticien.*')
                         ->where('praticiens.pra_ville','=', $ville)
                         ->get();
                         
                         
                     } else if ($profession!="..."){
                         
                         $req = DB::table('praticiens')
                         ->join('type_praticien', 'praticiens.typ_code', '=', 'type_praticien.typ_code')
                         ->select('praticiens.*', 'type_praticien.*')
                         ->where('type_praticien.TYP_LIBELLE','=', $profession)
                         ->get();
                        
                     } else {
                         
                     }
                         
                        
                     if ($profession!="..." && $ville!="..." && $nom!=""){
                         
                         $req = DB::table('praticiens')
                         ->join('type_praticien', 'praticiens.typ_code', '=', 'type_praticien.typ_code')
                         ->select('praticiens.*', 'type_praticien.*')
                         ->where('praticiens.pra_nom','=',$nom)
                         ->where('praticiens.pra_ville','=', $ville)
                         ->where('type_praticien.TYP_LIBELLE','=', $profession)
                         ->orderBy('praticiens.pra_nom', 'asc')
                         ->get();
                         
                     } else if ($profession!="..." && $ville!="...") {
                         $req = DB::table('praticiens')
                         ->join('type_praticien', 'praticiens.typ_code', '=', 'type_praticien.typ_code')
                         ->select('praticiens.*', 'type_praticien.*')
                         ->where('praticiens.pra_ville','=', $ville)
                         ->where('type_praticien.TYP_LIBELLE','=', $profession)
                         ->get();
                        
                     } else if($nom!="" && $profession!="...") {
                         $req = DB::table('praticiens')
                         ->join('type_praticien', 'praticiens.typ_code', '=', 'type_praticien.typ_code')
                         ->select('praticiens.*', 'type_praticien.*')
                         ->where('praticiens.pra_nom','=',$nom)
                         ->where('type_praticien.TYP_LIBELLE','=', $profession)
                         ->get();
                        
                     } else if($nom!="" && $ville!="...") {
                         
                         $req = DB::table('praticiens')
                         ->join('type_praticien', 'praticiens.typ_code', '=', 'type_praticien.typ_code')
                         ->select('praticiens.*', 'type_praticien.*')
                         ->where('praticiens.pra_nom','=',$nom)
                         ->where('praticiens.pra_ville','=', $ville)
                         ->get();
                         
                     }
                    
                     if ($req==[]) {
                         Session::flash('aucunRes', 'Pas de resultat');
                                                  
                     }
                     
                     
            

            return view("pages/praticien", ["lesPraticien" => $req],["test" => $reqData]);
            
 
    }
    
    public function visiteur() {
        return view("pages/visiteur", ["lesVisiteurs" => visiteur::all()]);
    }
    
    public function newCompteRendu() {
        return view('pages/newCompteRendu', ["lesPraticien" => praticien::all()], ["lesMedicaments" => medicament::all()]);
    }
    
}
