<?php

namespace App\Http\Controllers\utilisateur;
use App\Model\admin\porteur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\porteur\Notifiable;


class InscriptionporteurController extends Controller
{
    public function index()
    {

        return view('utilisateur.inscriptionP');
    }



    public function affecter()
    {


        $liste = porteur::all();


            return view('superadmin.porteur.affecter', ['porteur' => $liste]);



    }
    function idee ()
    {
        $liste = porteur::all();


        return view('entreprise.lidée', ['porteur' => $liste]);
    }
      public function store(Request $request)
      {


        //creation de noveau model d'emission
        $port = new porteur();

        //affectation de les valeurs
        $port->nom = $request->input('nom');
        $port->prenom = $request->input('prenom');
        $port->image = $request->input('image');
        $port->tel = $request->input('tel');
        $port->idee = $request->input('description');
        $port->domaine = $request->input('domaine');
        $port->demande = $request->input('demande');
        $port->curriculumVitae = $request->input('cv');
        $port->statut = 0 ;
        $port->email = $request->input('email');
        $port->password =bcrypt( $request->input('password'));

        $port->save();
          session()->flash('success','votre inscription et bien enregistré');
          return redirect ('inscriptionP');
    }

}
