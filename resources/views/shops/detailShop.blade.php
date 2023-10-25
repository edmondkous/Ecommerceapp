@extends('layoutshop.master')
@section('content')
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row single-product'>
            <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
                {{-- =================================== menu categorie================================== --}}
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
                    <nav class="yamm megamenu-horizontal">
                      <ul class="nav">

                        <li class="dropdown menu-item">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a>
                        </li>

                        <li class="dropdown menu-item">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a>
                        </li>

                        <li class="dropdown menu-item">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a>
                        </li>

                        <li class="dropdown menu-item">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a>
                        </li>

                        <li class="dropdown menu-item">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a>
                        </li>

                      </ul>
                      <!-- /.nav -->
                    </nav>
                    <!-- /.megamenu-horizontal -->
                  </div>
                {{-- ==========================================menu categorie======================================================= --}}
                <div class="sidebar-module-container">
                        <div class="home-banner outer-top-n outer-bottom-xs">
                  <img src="{{asset('assets/shop/images/banners/LHS-banner.jpg') }}" alt="Image">
                </div>
                      <!-- ============================================== HOT DEALS ============================================== -->
                {{-- <div class="sidebar-widget hot-deals outer-bottom-xs">
                  <h3 class="section-title">Hot deals</h3>
                  <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
              <div class="item">
                <div class="products">
                <div class="hot-deal-wrapper">
                  <div class="image">
                  <a href="#">
                  <img src="assets/images/hot-deals/p13.jpg" alt="">
                  <img src="assets/images/hot-deals/p13_hover.jpg" alt="" class="hover-image">
                  </a>
                  </div
                </div>
                <!-- /.product-info -->

                <div class="cart clearfix animate-effect">
                  <div class="action">
                    <div class="add-cart-button btn-group">
                      <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                      <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                    </div>
                  </div>
                  <!-- /.action -->
                </div>
                <!-- /.cart -->
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget -->
        </div> --}}

                </div>
            </div>
                <div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
                <div class="detail-block">
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
                        <div class="product-item-holder size-big single-product-gallery small-gallery">
                            <div id="owl-single-product">
                                <div class="single-product-gallery-item" id="slide9">
                                    <img class="img-responsive" alt="" src="{{asset('/storage/produits/'.$produits->image)}}"  />
                                </div>
                            </div>
                        </div>
                        </div>
                            <div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
                                <div class="product-info">
                                    <h1 class="name">{{$produits->nom_prod}}</h1>

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                        <div class="col-lg-12">
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                   <span class="label">Categorie :</span>
                                                </div>
                                            </div>
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                    <span class="value">{{$produits->categorie->nom_cat}}</span>
                                                </div>
                                            </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div>
                                    <div class="rating-reviews m-t-20">
                                        <div class="row">
                                        <div class="col-lg-12">
                                            <div class="pull-left">
                                                <div class="rating rateit-small"></div>
                                            </div>
                                            <div class="pull-left">
                                                <div class="reviews">
                                                    <a href="#" class="lnk">(13 Reviews)</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.rating-reviews -->

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                        <div class="col-lg-12">
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                    <span class="label">Disponibilité :</span>
                                                </div>
                                            </div>
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                    <span class="value">En Stock</span>
                                                </div>
                                            </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.stock-container -->

                                    <div class="description-container m-t-20">
                                        <p>{{$produits->description}} </p>
                                    </div><!-- /.description-container -->

                                    <div class="price-container info-container m-t-30">
                                        <div class="row">


                                            <div class="col-sm-6 col-xs-6">
                                                <div class="price-box">
                                                    <span class="price">{{$produits->prix}}Fcfa</span>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.price-container -->

                                    <div class="quantity-container info-container">
                                        <div class="row">

                                            <div class="qty">
                                                <span class="label">Qty :</span>
                                            </div>

                                            <div class="qty-count">
                                                <div class="cart-quantity">
                                                    <div class="quant-input">
                                                        <div class="arrows">
                                                        <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                        </div>
                                                        <input type="text" value="1">
                                                </div>
                                                </div>
                                            </div>
                                                <form action="{{route('cart.store')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="produit_id" value="{{$produits->id}}">
                                                    {{-- <input type="hidden" name="produit_nom" value="{{$produits->nom_prod}}">
                                                    <input type="hidden" name="produit_image" value="{{$produits->image}}">
                                                    <input type="hidden" name="produit_prix" value="{{$produits->prix}}"> --}}

                                                    <div class="add-btn">
                                                        <input type="submit" class="btn btn-primary" value="Panier" >
                                                    </div>
                                                </form>



                                        </div><!-- /.row -->
                                    </div><!-- /.quantity-container -->

                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                        </div>
                    </div><!-- /.col -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.product-tabs -->
<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

            <div class="clearfix"></div>
        </div><!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
@endsection
