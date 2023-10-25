<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProduitRequest;
use Gloudemans\Shoppingcart\Facades\Cart;


class ProduitController extends Controller
{

    public function index(){
        // dd(Cart::content());
        $produits = Produit::paginate(5);

        return view('produits.index', compact('produits'));
    }

    public function create(){

        $categories = Categorie::All();

        return view('produits.create', compact('categories'));
    }

    public function store(Request $request)
{
    // Valider les données du formulaire
    $produits = $request->validate([
        'nom_prod' => 'required',
        'prix' => 'required',
        'stock' => 'required',
        'description' => 'required',
        'categorie_id' => 'required',
        'image' => 'required|image', // Assurez-vous que l'image est un fichier d'image valide
    ]);

    // Gérer le téléchargement de l'image
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $imagePath = $image->storeAs('public/produits', $imageName);
        $produits['image'] = $imageName;
    }

    // Créer une instance de Produit avec les données validées
    Produit::create($produits);

    // Rediriger avec un message de succès
    return redirect()->route('produits.create')->with('success', 'Produit enregistré avec succès');
}

    public function pageShop()
    {
        $produits = Produit::paginate(8);
        return view('shops.pageShop', compact('produits'));
    }

    public function detailShop($id)
    {
        $produits = Produit::where('id', $id)->first();
        $categories = Categorie::all();
        return view('shops.detailShop', compact('produits'));
    }
}
