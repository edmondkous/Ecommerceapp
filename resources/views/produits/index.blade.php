@extends('layouts.template')
@section('content')

<main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste</h5>



              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Désignation</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>


                  </tr>
                </thead>

                 <tbody>
                   @forelse ($produits as $produit)

                            <tr>
                                <td>{{ $produit->id }}</td>
                                <td><img src="{{asset('/storage/produits/'.$produit->image)}}" width="50" height="50"></td>
                                <td>{{ $produit->nom_prod }}</td>
                                <td>{{ $produit->categorie->nom }}</td>
                                <td>
                                    <span class="badge bg-info">{{ $produit->prix }}Fcfa</span>
                                </td>
                                <td>{{ $produit->stock }}</td>
                                <td>{{ $produit->description }}</td>

                                <td>
                                    <a href="#"><input type='button' class="btn btn-success" value="Modifier"></a>

                                    <a href="#"><input type='button' class="btn btn-danger" value="Supprimer"></a>
                                </td>
                            </tr>

                            @empty

                            @endforelse
                </tbody>
              </table>

              <div>
                {{ $produits->links() }}
              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


@endsection
