<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collecte;

class CollecteController extends Controller
{
    public function index()
    {
        return view('collecte.save');
    }
    public function save_collecte(Request $request){
        $request->validate([
        'age' => 'nullable',
       'sexe' => 'nullable',
       'pays' => 'nullable',
       'ville' => 'nullable',
       'symp' => 'nullable',   
       'case1' => 'nullable',
       'case2' => 'nullable',
       'case3' => 'nullable',
       'case4' => 'nullable',
       'case5' => 'nullable',
       'case6' => 'nullable',
       'case7' => 'nullable',
       'case8' => 'nullable',
       'case9' => 'nullable',
       'case10' => 'nullable',
      'case11' => 'nullable',
       'case12' => 'nullable',
       'case13' => 'nullable',
       'case14' => 'nullable',
       'case15' => 'nullable',
       'case16' => 'nullable',
       'case17' => 'nullable',
       'case18' => 'nullable',
       'case19' => 'nullable',
       'case20' => 'nullable',
       'case21' => 'nullable',
       'case22' => 'nullable',
       'case23' => 'nullable',
       'case24' => 'nullable',
       'case25' => 'nullable',
       'case26' => 'nullable',
       'case27' => 'nullable',
       'case28' => 'nullable',
       'case29' => 'nullable',
       'case30' => 'nullable',
       'case31' => 'nullable',
       'case32' => 'nullable',
       'case33' => 'nullable',
       'case34' => 'nullable',
       'case35' => 'nullable',
       'case36' => 'nullable',
       'case37' => 'nullable',
       'case38' => 'nullable',
       'case39' => 'nullable',
       'case40' => 'nullable',
       'case41' => 'nullable',
       'case42' => 'nullable',
       'case43' => 'nullable',
       'case44' => 'nullable',
       'case45' => 'nullable',
       'case46' => 'nullable',
       'case47' => 'nullable',
       'case48' => 'nullable',
       'case49' => 'nullable',
       'case50' => 'nullable',
       'intensite1' => 'nullable',
       'intensite2' => 'nullable',
       'intensite3' => 'nullable',
       'intensite4' => 'nullable',
       'intensite5' => 'nullable',
       'intensite6' => 'nullable',
       'intensite7' => 'nullable',
       'intensite8' => 'nullable',
       'intensite9' => 'nullable',
       'intensite10' => 'nullable',
        ]);
        $collecte = new Collecte();
        $collecte->age = $request->age;
        $collecte->sexe = $request->sexe;
        $collecte->pays = $request->pays;
        $collecte->ville = $request->ville;
        $collecte->symp = $request->symp;
        $collecte->case1 = $request->case1;
        $collecte->case2 = $request->case2;
        $collecte->case3 = $request->case3;
        $collecte->case4 = $request->case4;
        $collecte->case5 = $request->case5;
        $collecte->case6 = $request->case6;
        $collecte->case7 = $request->case7;
        $collecte->case8 = $request->case8;
        $collecte->case9 = $request->case9;
        $collecte->case10 = $request->case10;
        $collecte->case11 = $request->case11;
        $collecte->case12 = $request->case12;
         $collecte->case13 = $request->case13;
         $collecte->case14 = $request->case14;
         $collecte->case15 = $request->case15;
         $collecte->case16 = $request->case16;
         $collecte->case17 = $request->case17;
         $collecte->case18 = $request->case18;
         $collecte->case19 = $request->case19;
         $collecte->case20 = $request->case20;
         $collecte->case21 = $request->case21;
         $collecte->case22 = $request->case22;
         $collecte->case23 = $request->case23;
         $collecte->case24 = $request->case24;
         $collecte->case25 = $request->case25;
         $collecte->case26 = $request->case26;
         $collecte->case27 = $request->case27;
         $collecte->case28 = $request->case28;
         $collecte->case29 = $request->case29;
         $collecte->case30 = $request->case30;
         $collecte->case31 = $request->case31;
         $collecte->case32 = $request->case32;
         $collecte->case33 = $request->case33;
         $collecte->case34 = $request->case34;
         $collecte->case35 = $request->case35;
         $collecte->case36 = $request->case36;
         $collecte->case37 = $request->case37;
         $collecte->case38 = $request->case38;
         $collecte->case39 = $request->case39;
         $collecte->case40 = $request->case40;
         $collecte->case41 = $request->case41;
         $collecte->case42 = $request->case42;
         $collecte->case43 = $request->case43;
         $collecte->case44 = $request->case44;
         $collecte->case45 = $request->case45;
         $collecte->case46 = $request->case46;
         $collecte->case47 = $request->case47;
         $collecte->case48 = $request->case48;
         $collecte->case49 = $request->case49;
         $collecte->case50 = $request->case50;
         $collecte->intensite1 = $request->intensite1;
         $collecte->intensite2 = $request->intensite2;
         $collecte->intensite3 = $request->intensite3;
         $collecte->intensite4 = $request->intensite4;
         $collecte->intensite5 = $request->intensite5;
         $collecte->intensite6 = $request->intensite6;
         $collecte->intensite7 = $request->intensite7;
         $collecte->intensite8 = $request->intensite8;
         $collecte->intensite9 = $request->intensite9;
         $collecte->intensite10 = $request->intensite10;
         $collecte->save();
         return redirect('/affiches')->with('status','vos donnees ont ete envoyer avec success');
    }
}
