<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit = new Produit();
        $produit->nom ="T-Shirt Canadian";
        $produit->prix_ht = 3500;
        $produit->description = "T-Shirt du film Idoles Senegal"; 
        $produit->img_principale = "canadian.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom ="T-Shirt Catwoman";
        $produit->prix_ht = 3500;
        $produit->description = "T-Shirt du film Idoles Senegal"; 
        $produit->img_principale = "catwoman.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom ="T-Shirt Chauve";
        $produit->prix_ht = 3500;
        $produit->description = "T-Shirt du film Idoles Senegal"; 
        $produit->img_principale = "chauve.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom ="T-Shirt Coffee";
        $produit->prix_ht = 5000;
        $produit->description = "T-Shirt du film Idoles Senegal"; 
        $produit->img_principale = "coffee.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom ="T-Shirt Eat";
        $produit->prix_ht = 8000;
        $produit->description = "T-Shirt du film Idoles Senegal"; 
        $produit->img_principale = "eat.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom ="T-Shirt guys";
        $produit->prix_ht = 7000;
        $produit->description = "T-Shirt du film Idoles Senegal"; 
        $produit->img_principale = "guys.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom ="T-Shirt Hodl";
        $produit->prix_ht = 2000;
        $produit->description = "T-Shirt du film Idoles Senegal"; 
        $produit->img_principale = "hodl.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom ="T-Shirt Solved";
        $produit->prix_ht = 2500;
        $produit->description = "T-Shirt du film Idoles Senegal"; 
        $produit->img_principale = "solved.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom ="T-Shirt White";
        $produit->prix_ht = 10000;
        $produit->description = "T-Shirt du film Idoles Senegal"; 
        $produit->img_principale = "white_shirt.jpg";
        $produit->save();

    }
}
