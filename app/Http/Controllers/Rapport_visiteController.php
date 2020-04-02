<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visiteur;
use App\rapport_visite;
use App\offrir;
use App\praticien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Rapport_visiteController extends Controller
{
    public function affRapport() {
        $nomUser = Auth::user()->mat;
        

        $lesRapports  = rapport_visite::where('VIS_MATRICULE', $nomUser )->get();   
        
        return view("pages/compteRendue", ["lesRapports" => $lesRapports]);

    }
    
    public function creerRapport(Request $request) {
        
        $tableRapport = new rapport_visite;
        
        $matricule = Auth::user()->mat;
        $Toffrir = explode(" ", $request->input('listemed'));
        $nomPraticien = praticien::where('PRA_NOM', $request->input('practicien') )->get();
        $dateRapport = $request->input('date');
        $motif = $request->input('motifvisite');
        $bilan = $request->input('bilan');
        $nbRapport = rapport_visite::all()->count();
        $nbRapport+=1;
        

        foreach ($nomPraticien as $prat) {
            $nomPraticien =  $prat->PRA_NUM;     
        }
        
        $tableRapport->VIS_MATRICULE = $matricule;
        $tableRapport->PRA_NUM = $nomPraticien;
        $tableRapport->RAP_NUM = $nbRapport;
        $tableRapport->RAP_DATE = $dateRapport;
        $tableRapport->RAP_BILAN = $bilan;
        $tableRapport->RAP_MOTIF = $motif;
        $tableRapport->save();
        

        
        $rest=0;
        $nbqte=0;
        $nbNomMed=0;
        $arrayQte=null;
        $arrayNomMed=null;
        
        for ($i=0 ; $i<count($Toffrir) ; $i++) {
            
            if ($i % 2 == 1)
            {
                
                $arrayQte[$nbqte]= $Toffrir[$i];
                $nbqte+=1;
            }
            elseif ($i % 2 == 0)
            {
                
                $arrayNomMed[$nbNomMed]= $Toffrir[$i];
                $nbNomMed+=1;
            } else {
                echo "Erreur - liste m�dicament";
            }
            
        }
        
        for ($i=0; $i<count($arrayNomMed);$i++) {
            
            for ($i=0; $i<count($arrayQte);$i++) {
                echo " qte: ".$arrayQte[$i];
                echo " Nom: ".$arrayNomMed[$i];
                
                $tableOffrir = new offrir;
                
                $tableOffrir->VIS_MATRICULE= $matricule;
                $tableOffrir->RAP_NUM = $nbRapport;
                $tableOffrir->MED_DEPOTLEGAL = $arrayNomMed[$i];
                $tableOffrir->OFF_QTE = $arrayQte[$i];
                
                $tableOffrir->save();
                
            }
            
        }
        
        Session::flash('mdpSuccess', 'Compte-rendu enregistrees');
       
        return redirect()->route('rapportvisite');

    }

}
