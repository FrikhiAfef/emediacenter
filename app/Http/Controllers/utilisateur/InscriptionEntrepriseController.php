<?php

namespace App\Http\Controllers\utilisateur;
use App\Model\admin\entreprise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InscriptionEntrepriseController extends Controller
{
    public function index()
    {

        return view('utilisateur.inscriptionEntreprise');
    }

    public function desactiver(){
      /*  $liste = entreprise::all();*/


       /* $entreprise =entreprise::all()
            ->where(('deleted_at')!==null)
            ->get();*/
        $entreprise = DB::table('entreprises')
            ->whereNotNull('deleted_at')
            ->get();
        return view('superadmin.entreprise.desactiver', ['entreprise' => $entreprise]);

    }


    public function valider()
    {


        $liste = entreprise::all();



        return view('superadmin.entreprise.valider', ['entreprise' => $liste]);



    }
    /*
    function idee ()
    {
        $liste = porteur::all();


        return view('entreprise.lidée', ['porteur' => $liste]);
    }*/
    public function store(Request $request)
    {


        //creation de noveau model d'emission
        $Ent = new entreprise();

        //affectation de les valeurs
        $Ent->nom = $request->input('nom');
        $Ent->logo = $request->input('logo');
        $Ent->tel = $request->input('tel');
        $Ent->fax = $request->input('fax');
        $Ent->description = $request->input('description');
        $Ent->domaine = $request->input('domaine');
        $Ent->demande = $request->input('demande');
        $Ent->email = $request->input('email');
        $Ent->password =bcrypt( $request->input('password'));
        $Ent->statut = 0 ;
        $Ent->save();
        session()->flash('success','votre inscription a été bien enregistré');
        return redirect ('inscriptionEntreprise');

    }

}
