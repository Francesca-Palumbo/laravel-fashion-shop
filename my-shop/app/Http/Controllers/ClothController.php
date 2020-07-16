<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class ClothController extends Controller
{

    //questa funzione mi permette di andare a leggere il contenuto del database che ho in precedenza creato (come fosse la query select * from clothes)
    public function index(){

        //avendo collegato il namespace del model a questo, adesso Cloth è definito anche in questo ambiente
        $all_clothes = Cloth::all();
        $data = [
            'lista_clothes' => $all_clothes
        ];

        // return view('clothes' , $data);
        return view('layouts.clothes')->with($data);
        // return view('clothes' , ['clothes' => $all_clothes ]);

        //mi permette di stampare a video come il var_dump ma più performante. con questo dd vado a vedere se la funzione va a buon fine (che è mappata lo so già perchè il test funziona)
        // dd($all_clothes);
    }
}
