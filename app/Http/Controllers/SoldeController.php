<?php

namespace App\Http\Controllers;

use Illueminate\Http\Request;
use App\Employe;
class SoldeController extends Controller
{
    public function index(){
        $soldes = Employe::all();

        return view('soldes.index', compact('soldes'));
    }
}
