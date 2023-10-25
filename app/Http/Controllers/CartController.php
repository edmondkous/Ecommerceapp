<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Cart;
use App\Http\Controllers\ProduitController;
use App\Http\Requests\StoreProduitRequest;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('carts.index');
    }

    // public function increaseQuantity($rowId)
    // {
    //     $produit = Cart::get($rowId);
    //     $qty = $produit-> qty + 1 ;
    //     Cart::update($rowId);
    // }

    // public function decreaseQuantity($rowId)
    // {
    //     $produit = Cart::get($rowId);
    //     $qty = $produit-> qty - 1 ;
    //     Cart::update($rowId);
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $duplicata = Cart::search( function($cartItem, $rowId) use($request){
            return $cartItem->id==$request->produit_id;
        });

        if($duplicata->isNotEmpty())
        {
            return redirect()->route('shops.pageShop')->with('success_ok','Le produit a déja été ajouté.');
        }
        $produits = Produit::find($request->produit_id);

        Cart::add($produits->id, $produits->nom_prod, 1, $produits->prix)
                ->
            associate('\App\Models\Produit');
            return redirect()->route('shops.pageShop')->with('success','Le produit a été ajouté au panier.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);

        return back()->with('success','Vous avez retirer ce produit');
    }
}
