<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
         $users = User::where('grade','!=', 'admin')->get();
        return view('users.index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {

        $user = User::find($id);
        return view('users.edit', compact('user')); }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    $user = User::find($id);
         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->numtel = $request->input('numtel');
         $user->adresse = $request->input('adresse');
         $user->date_recrutement = $request->input('date_recrutement');
         $user->grade = $request->input('grade');
         $user->save(); /
        return redirect('/users')->with('edit-message', 'L\'utilisateur à été modifié avec succée !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect('/users')->with('delete-message', 'L\'utilisateur à été supprimé avec succée !!');
    }
}
