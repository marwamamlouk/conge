<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
class SecretaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
     path: /secretaires
     method: get
     Route::get('/secretaires', 'SecretaireController@index);
    */
    public function index()
    {
        //
        $secretaires = User::where('grade', 'secretaire')->get();
        return view('secretaires.index', compact('secretaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
     path: /secretaires/create
     method: get
     Route::get('/secretaires/create', 'SecretaireController@create);
    */
    public function create()
    {
        return view('secretaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*
     path: /secretaires
     method: post
     Route::post('/secretaires', 'SecretaireController@store);
    */
    public function store(Request $request)
    {
        $secretaire = new User();

        $secretaire->name = $request->input('name');
        $secretaire->email = $request->input('email');
        $secretaire->password = Hash::make($request->input('password'));
        $secretaire->adresse = $request->input('adresse');
        $secretaire->numtel = $request->input('numtel');
        $secretaire->date_recrutement = $request->input('date_recrutement');
        $secretaire->grade = "secretaire";

        $secretaire->save();

        return redirect('secretaires')->with('add-message', 'La secrétaire a été ajouté avec succé');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
     path: /secretaires/$id
     method: get
     Route::get('/secretaires/{id}', 'SecretaireController@show);
    */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
     path: /secretaires/$id/edit
     method: get
     Route::get('/secretaires/{id}/edit', 'SecretaireController@edit);
    */
    public function edit($id)
    {
        $secretaire = User::find($id);

        return view('secretaires.edit', compact('secretaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
     path: /secretaires/$id
     method: put
     Route::put('/secretaires/{id}', 'SecretaireController@update);
    */
    public function update(Request $request, $id)
    {
        $secretaire = User::find($id);

        $secretaire->name = $request->input('name');
        $secretaire->email = $request->input('email');
        $secretaire->adresse = $request->input('adresse');
        $secretaire->password = Hash::make($request->input('password'));
        $secretaire->numtel = $request->input('numtel');
        $secretaire->date_recrutement = $request->input('date_recrutement');

        $secretaire->save();

        return redirect('/secretaires')->with('edit-message', 'La secrétaire a été modifié avec succé');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
     path: /secretaires/$id
     method: delete
     Route::delete('/secretaires/{id}', 'SecretaireController@destroy);
    */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect('/secretaires')->with('delete-message', 'La secrétaire a été supprimé avec succé');
    }
}
