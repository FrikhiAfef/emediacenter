<?php

namespace App\Http\Controllers\responsable\radio;

use App\Model\responsable\radio\emission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmissionsController extends Controller
{
    public function index()
    {
        $listeemis = emission::all();
        return view('superadmin.emissions.emission',['emissions' => $listeemis]);
    }


    public function create()
    {
        return view('superadmin.emissions.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'nomE'=>'required',
            'nomAnim'=>'required',

            'date'=>'required',
            'description'=>'required',
            'image'=>'required',

        ]);


        $emis = new emission();


        $emis->nomE = $request->input('nomE');
        $emis->nomAnim = $request->input('nomAnim');

        $emis->description = $request->input('description');
        $emis->date = $request->input('date');
        $emis -> image = $request->input('image');

        $emis->save();
        session()->flash("delete","L'emission à été bien ajouté ");

        return redirect(route('emission.index'));
    }


    public function show($id)
    {
        $emission = emission::find($id);
        return view('superadmin.emissions.show',['emissions' => $emission]);
    }


    public function edit($id)
    {
        $emission = emission::find($id);
        return view('superadmin.emissions.edit',['emission' => $emission]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nomE'=>'required',
            'nomAnim'=>'required',

            'date'=>'required',
            'description'=>'required',
            'image'=>'required',

        ]);

        $emis = emission::find($id);
        $emis->nomE = $request->input('nomE');
        $emis->nomAnim = $request->input('nomAnim');

        $emis->description = $request->input('description');
        $emis->date = $request->input('date');
        //  $emis -> image = $request->input('image');
        $emis->save();

        //une seul  session pour afiicher le message de success
        session()->flash('success','Le membre à été bien modifier ');
        //apres le modification
        return redirect(route('emission.index'));
    }


    public function destroy($id)
    {
        $emis = emission::find($id);
        $emis->delete();
        return redirect(route('emission.index'));

        //une seul  session pour afiicher le message de success
        session()->flash("delete","L'emission à été bien supprimer ");
    }
}
