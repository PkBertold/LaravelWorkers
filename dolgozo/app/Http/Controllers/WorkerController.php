<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dolgozo;

class WorkerController extends Controller
{
    public function newDolgozo() {
 
        return view( "new_dolgozo");
    }

    public function storeDolgozo( Request $request ) {
 
        $dolgozo = new Dolgozo;
 
        $dolgozo->nev = $request->nev;
        $dolgozo->varos = $request->varos;
        $dolgozo->szuletes = $request->szuletes;
        $dolgozo->fizetes = $request->fizetes;
     
        $dolgozo->save();

        $request->session()->flash( "success", "Kiírás sikeres" );
        return redirect( "/uj-dolgozo" );
    }

    public function listDolgozo() {
 
        $dolgozo = DB::table( "dolgozo" )->get();
     
        echo "<pre>";
        print_r( $dolgozo );
    }

    public function listDolgozoDetailed() {
 
        $dolgozo = DB::table( "dolgozo" )->select( "name", "varos", "szuletes", "fizetes" )->get();
     
        echo "<pre>";
        print_r( $dolgozo );
    }

    public function selectDolgozo() {
 
        $dolgozo = Dolgozo::all();
     
        return view( "list_dolgozo", [
            "dolgozos" => $dolgozo
        ] );
    }

    public function showUpdateDolgozo( $id ) {
 
        $dolgozo = Dolgozo::find( $id );
     
        return view( "show_dolgozo", [
            "dolgozo" => $dolgozo
        ]);
    }


    public function submitUpdateDolgozo( Request $request ) {
 
        $dolgozo = Dolgozo::find( $request[ "dolgozo_id" ]);
 
        $dolgozo->nev = $request[ "name" ];
        $dolgozo->varos = $request[ "varos" ];
        $dolgozo->szuletes = $request[ "szuletes" ];
        $dolgozo->fizetes = $request[ "fizetes" ];
     
        $dolgozo->save();
     
        session()->flash( "success", "Sikeres frissítés" );
     
        return redirect( "/kiir-dolgozo" );
    }
}
