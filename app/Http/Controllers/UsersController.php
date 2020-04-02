<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\visiteur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class UsersController extends Controller
{
    public function modify(Request $request) {

        
        $idUser = Auth::user()->id;
        $nomtrouve  = User::find($idUser);
        $matUser = Auth::user()->mat;
        $visiteurs  = visiteur::where('VIS_MATRICULE', $matUser )->get();  
        
        if ($idUser == $nomtrouve->id) {
            
            if($request->input('password')=="" || $request->input('verifPassword')=="") {
                    foreach ($visiteurs as $visiteur) {
                        $visiteur->VIS_NOM = $request->input('nom');
                        $visiteur->Vis_PRENOM = $request->input('prenom');
                        $visiteur->VIS_ADRESSE = $request->input('adresse');
                        $visiteur->VIS_CP = $request->input('cp');
                        $visiteur->VIS_VILLE = $request->input('ville');
                        
                        visiteur::where('VIS_MATRICULE', $matUser)
                        ->update(['VIS_NOM' => $request->input('nom'),
                            'Vis_PRENOM' => $request->input('prenom'),
                            'VIS_ADRESSE' => $request->input('adresse'),
                            'Vis_PRENOM' => $request->input('prenom'),
                            'VIS_CP' => $request->input('cp'),
                            'VIS_VILLE' => $request->input('ville')
                            
                        ]);
                        
                        $nomtrouve->name = $request->input('id');
                        $nomtrouve->save();
                    }
                
                
            }
            else{
                if($request->input('password') == $request->input('verifPassword')) {
                    foreach ($visiteurs as $visiteur) {
                        $visiteur->VIS_NOM = $request->input('nom');
                        $visiteur->Vis_PRENOM = $request->input('prenom');
                        $visiteur->VIS_ADRESSE = $request->input('adresse');
                        $visiteur->VIS_CP = $request->input('cp');
                        $visiteur->VIS_VILLE = $request->input('ville');
                        
                        visiteur::where('VIS_MATRICULE', $matUser)
                        ->update(['VIS_NOM' => $request->input('nom'),
                            'Vis_PRENOM' => $request->input('prenom'),
                            'VIS_ADRESSE' => $request->input('adresse'),
                            'Vis_PRENOM' => $request->input('prenom'),
                            'VIS_CP' => $request->input('cp'),
                            'VIS_VILLE' => $request->input('ville')
                            
                        ]);
                        
                    }
                    
                    $nomtrouve->name = $request->input('id');
                    $nomtrouve->password = Hash::make($request->input('password'));
                    $nomtrouve->save();

                } else {
                    Session::flash('mdpVerif', 'Les mots de passe ne correspondent pas ! ');
                }
            
            }
            
        }
        Session::flash('mdpSuccess', 'Information enregistrees');
        
        return redirect()->route('profil');

        
    }
}
