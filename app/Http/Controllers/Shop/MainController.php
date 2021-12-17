<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        $produits = Produit::all(); // select * from produits;
        
        return view('shop.index', compact('produits'));
    }

    public function produit(Request $request){

        // select * from produit where id=?;
        $produit = Produit::find($request->id);

        return view('shop.produit', compact('produit'));
    }

    public function category(){
        return view('shop.categorie');
    }
    
}
