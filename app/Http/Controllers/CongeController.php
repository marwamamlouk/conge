<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conge;
use Auth;
use Carbon\Carbon;
class CongeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        if(Auth::user()->grade == "agent administratif" or Auth::user()->grade == "directeur"){
            $conges = Conge::paginate(5);
        } else {
            // where('date_debut', '<', Carbon::now())->where('date_retour', '>', Carbon::now())
            $conges = Conge::where('user_id', Auth::user()->id)->paginate(5);
        }
        return view('conges.index', compact('conges'));
    }
    public function historique()
    {      
        if(Auth::user()->grade != "employe"){
            $conges = Conge::all();
        }else {
            $conges = Conge::where('user_id', Auth::user()->id)->where('date_retour', '<', Carbon::now())->get();
        }

        return view('historiques.index', compact('conges'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conges.create');
    }

    public function search(Request $request){
        $conges = Conge::where('date_retour', $request->date_retour)->get();
        return view('historiques.index', compact('conges'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aujourdhui_m = date('m',strtotime(Carbon::now()));
        $aujourdhui_y = date('y',strtotime(Carbon::now()));
        $timestamp = Auth::user()->date_recrutement;
        $month_rec = date("m", strtotime($timestamp));
        $year_rec =  date("y", strtotime($timestamp));
        if($aujourdhui_y == $year_rec){
            $month_compare = $month_rec - $aujourdhui_m;
            if($month_compare < 6){
                return redirect('/conges')->with('conge-error', 'Vous devez d??passer six mois de travail avant la demande de cong??');
            }else{
                $conge = new Conge();
                $conge->user_id = Auth::user()->id;
                $conge->date_debut = $request->input('date_debut');
                $conge->date_retour = $request->input('date_retour');
                $conge->cause = $request->input('cause');
                $conge->save();

                return redirect('conges')->with('add-message', 'Le cong?? a ??t?? ajout?? avec succ??e');
            }
        } else if($aujourdhui_y > $year_rec){
            $year_compare = $aujourdhui_y - $year_rec;
            if($year_compare > 1){
                $conge = new Conge();
                $conge->user_id = Auth::user()->id;
                $conge->date_debut = $request->input('date_debut');
                $conge->date_retour = $request->input('date_retour');
                $conge->cause = $request->input('cause');
                $conge->save();

                return redirect('conges')->with('add-message', 'Le cong?? a ??t?? ajout?? avec succ??e');
            } else {
                $m1 = 12 - $month_rec;
                if($m1 + $aujourdhui_m < 6){
                    return redirect('/conges')->with('conge-error', 'Vous devez d??passer six mois de travail avant la demande de cong??');
                }else {
                    $conge = new Conge();
                    $conge->user_id = Auth::user()->id;
                    $conge->date_debut = $request->input('date_debut');
                    $conge->date_retour = $request->input('date_retour');
                    $conge->cause = $request->input('cause');
                    $conge->save(); 
                    return redirect('conges')->with('add-message', 'Le cong?? a ??t?? ajout?? avec succ??e');
                } 
            }
        }
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
    // fonction d'acceptation
    public function accepter($id){
        $conge = Conge::find($id);

        $conge->acceptation = "oui";

        $conge->save();

        return redirect('conges')->with('conge-accepter', 'le cong?? est accept??');
    }
    // fonction de refus
    public function refuser($id){
        $conge = Conge::find($id);

        $conge->acceptation = "non";

        $conge->save();

        return redirect('conges')->with('conge-refuser', 'le cong?? est refus??');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conge = Conge::find($id);
        
        return view('conges.edit', compact('conge'));
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
        $conge = Conge::find($id);

        $conge->date_debut = $request->input('date_debut');
        $conge->date_retour = $request->input('date_retour');
        $conge->cause = $request->input('cause');

        $conge->save();

        return redirect('conges')->with('edit-message', 'Le cong?? a ??t?? modifi?? avec succ??e');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Conge::find($id)->delete();
        return redirect('conges')->with('delete-message', 'Le cong?? a ??t?? supprim?? avec succ??e');
    }

    public function print(){
        $conges = Conge::all();

        return view('conges.print', compact('conges'));
    }
}
