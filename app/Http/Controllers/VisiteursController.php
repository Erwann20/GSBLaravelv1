<?php

namespace App\Http\Controllers;

use App\visiteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use App\User;
use Illuminate\Support\Facades\Hash;
    

class VisiteursController extends Controller
{
    private $_id;
    private $_mdp;
    private $_hash;
    private $_sessionLogin;
    private $_sessionMdp;
    

    public function test() {
        $lesUsers = visiteur::all();
        
        $userTable = User::all();
        
        foreach ($lesUsers as $unUser) {
           echo  $unUser->VIS_NOM." ";
           echo $unUser->VIS_DATEEMBAUCHE." ";
           echo $unUser->VIS_MATRICULE."<br>";
           
           $name =  $unUser->VIS_NOM;
           $password = $unUser->VIS_DATEEMBAUCHE;
           $mat = $unUser->VIS_MATRICULE;
           
           User::create([
               'name' => $name,
               'mat' => $mat,
               'email' => null,
               'password' => Hash::make($password),

           ]);
           
           
        }
                
    }
    
    
    
    public function pageConnexion() {
        
        
        return view("pages/connexion", ["lesUsers" => visiteur::all()]);
    }
    
    public function affVisiteur() {
        
        
        return view("pages/visiteur", ["lesVisiteurs" => visiteur::all()]);
    }
    
    public function pageProfil() {
        
       
        return view("pages/profil", ["lesVisiteurs" => visiteur::all()]);
    }
    
    
    
    public function modifyVisiteur(Request $request) {
        $texte = $request->input('adresse');
        $login = $request->input('login');
        
        $visiteur  = visiteur::find($login);
        if($visiteur){
            $visiteur->VIS_MATRICULE = $texte;
            $visiteur->save();
        } else {
            
        }
        
    }
    
    
    /**
     * @return mixed
     */
    public function getSessionLogin()
    {
        return $this->_sessionLogin;
    }
    
    /**
     * @return mixed
     */
    public function getSessionMdp()
    {
        return $this->_sessionMdp;
    }   
    
    
}
