<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\Categorie;
use PHPunit\Framework\Constraint\Count;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProduit = Produit::all()->count();
        $totalCategorie = Categorie::all()->count();

        return view('dashboard', compact('totalProduit','totalCategorie'));
    }
}
