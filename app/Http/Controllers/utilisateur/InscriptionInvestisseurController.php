<?php

namespace App\Http\Controllers\utilisateur;
use App\Model\admin\investisseur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InscriptionInvestisseurController extends Controller
{
    public function index()
    {

        return view('utilisateur.inscriptionInvestisseur');
    }

    public function desactiver(){

        $investisseur = DB::table('investisseurs')
            ->whereNotNull('deleted_at')
            ->get();
        return view('superadmin.investisseur.desactiver', ['investisseur' => $investisseur]);

    }

    public function valider()
    {


        $liste = investisseur::all();


        return view('superadmin.investisseur.valider', ['investisseur' => $liste]);



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
        $inv = new investisseur();

        //affectation de les valeurs
        $inv->nom = $request->input('nom');
        $inv->prenom = $request->input('prenom');
        $inv->tel = $request->input('tel');
        $inv->image = $request->input('image');
        $inv->domaine = $request->input('domaine');
        $inv->demande = $request->input('demande');
        $inv->email = $request->input('email');
        $inv->password =bcrypt( $request->input('password'));
        $inv->statut = 0 ;
        $inv->save();
        session()->flash('success','votre inscription a été bien enregistré');
        return redirect ('inscriptionInvestisseur');

    }

}
