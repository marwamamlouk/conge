<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Requests\EmployesRequest;
use Auth;
class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $employes = Employe::where("etat",'!=', 'retraite')->get();
        return view('employes.index', compact('employes'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Cette fonction permet d'afficher le formualaire
        return view('employes.create');
    }

    public function filtrer(Request $request){

        $solde = empty($request->input('solde'));
        $etat = empty($request->input('etat'));
        $profession = empty($request->input('profession'));
        if($solde == false && $etat == false && $profession == false){

            $employes = Employe::where(['solde', $request->input('solde'),
                                        'etat', $request->input('etat'),
                                        'profession', $request->input('profession')
                                       ])->get();

        } else if($etat == false && $profession == false){
            $employes = Employe::where('etat', '=',$request->input('etat'))
                            ->where('profession','=', $request->input('profession'))
                                       ->get();
        } else if($solde == false && $profession == false){
            $employes = Employe::where('solde', '=',$request->input('solde'))
                            ->where('profession','=', $request->input('profession'))
                                       ->get();
        } else if($solde == false && $etat == false){
            $employes = Employe::where('solde', '=',$request->input('solde'))
                            ->where('etat','=', $request->input('etat'))
                                       ->get();
        } else if($profession == false){
            $employes = Employe::where('profession', '=',$request->input('profession'))
                                       ->get();
        }else if($solde == false){
            $employes = Employe::where('solde', '=',$request->input('solde'))
                                       ->get();
        } else {
            $employes = Employe::where('etat','=', $request->input('etat'))
                                       ->get(); }
        return view('employes.index', compact('employes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(EmployesRequest $request)
    {

        $user = new User();
        //  remplir les champs
        // $request prend les valeurs de toutes les inputs dans la vue create
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->adresse = $request->input('adresse');
        $user->password =  Hash::make($request->input('password'));
        $user->numtel = $request->input('numtel');
        $user->date_recrutement = $request->input('date_recrutement');
        $user->grade = $request->input('grade');
        $user->save();
        $employe = new Employe();
        $employe->cin = $request->input('cin');
        $employe->user_id = $user->id;
        $employe->etat = $request->input('etat');
        $employe->solde = $request->input('solde');
        $employe->profession = $request->input('profession');
        $employe->type_contrat = $request->input('type_contrat');
        $employe->save();

        return redirect('/employes');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function solde()
    { $soldes = Employe::where('user_id', Auth::user()->id)->get();
        return view('soldes.index', compact('soldes')); }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $employe = Employe::find($id);

        return view('employes.edit',compact('employe'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employe = Employe::find($id);
        $user = User::find($employe->user_id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->adresse = $request->input('adresse');
        $user->password = $request->input('password');
        $user->numtel = $request->input('numtel');
        $user->date_recrutement = $request->input('date_recrutement');
        $user->grade = $request->input('grade');
        $user->save();
        $employe->cin = $request->input('cin');
        $employe->etat = $request->input('etat');
        $employe->solde = $request->input('solde');
        $employe->profession = $request->input('profession');
        $employe->save();
        // rédirigier à la page index
        return redirect('/employes')->with('edit-message', 'L\'employé a été modifié avec succée');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employe::find($id)->delete();
        return redirect('employes')->with('delete-message', 'L\'employé a été supprimé avec succé'); // claire ui na9es lmsg lazem nzidou hak flash tafakrtih ? kima alert? ey sahetii
    }

    public function retraite($id){

        $employe = Employe::find($id);

        $employe->etat = "retraite";

        $employe->save();

        return redirect('employes')->with('retraite-message', 'Employe retraité');

    }
}
