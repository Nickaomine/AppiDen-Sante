<?php

namespace App\Http\Controllers;

use App\Models\Collecte;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index(){
        $collectes = Collecte::all();
        return view('affiches.details',compact('collectes'));
    }

    public function search_collecte(Request $request)
    {
        $search_collecte = $request->search_collecte;
        $collectes = Collecte::where(function($query) use ($search_collecte){

            $query->where('age','like',"%$search_collecte")
            ->orWhere('sexe','like',"%$search_collecte");

        })
        ->get();
        return view('affiches.details',compact('collectes','search_collecte'));
    }
}
