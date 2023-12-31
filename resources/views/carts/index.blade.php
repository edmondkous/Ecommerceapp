@extends('layoutshop.master')
@section('content')

    @if (Cart::count() >0)
    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row ">
                <div class="shopping-cart">
                    <div class="shopping-cart-table ">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="cart-romove item">Retirer</th>
                        <th class="cart-description item">Image</th>
                        <th class="cart-sub-total item">Désignation</th>
                        <th class="cart-product-name item">Quantité</th>
                        <th class="cart-qty item">Prix</th>
                        <th class="cart-qty item">Total</th>

                    </tr>
                </thead><!-- /thead -->

                <tbody>
                    @if (Session::has('success'))
                    <script>
                        swal("Message","{{ Session::get('success')}}",'success',{
                            button:true,
                            button:"OK",
                            timer:5000,


                        });
                    </script>
                @endif
                    @foreach (Cart::content() as $produit)
                        <tr>
                            <td class="romove-item">
                                <form method="post" action="{{route('cart.destroy', $produit->rowId)}}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                            <td class="cart-image">
                                <a class="entry-thumbnail" href="#">
                                    <img src="{{asset('/storage/produits/') }}/{{ $produit->model->image }}" alt="" height="50" width="30">
                                </a>
                            </td>
                            <td class="cart-product-name-info">
                                <h4 class='cart-product-description'><a href="#">{{ $produit->model->nom_prod }} </a></h4>
                            </td>
                            <td class="cart-product-quantity">
                                <div class="quant-input">
                                        <div class="arrows">
                                            <a href="" class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></a>
                                            <a href="" class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></a>
                                        </div>
                                        <input type="text" value="{{$produit->qty}}">
                                    </div>
                            </td>

                            <td class="cart-product-name-info">
                                <h4 class='cart-product-description'><a href="#">{{ $produit->model->prix }} </a></h4>
                            </td>
                            <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{ $produit->subtotal }}</span></td>
                        </tr>

                    @endforeach

                </tbody><!-- /tbody -->

                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="shopping-cart-btn">
                                <span class="">
                                    <a href="#" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                                    <a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>
                                </span>
                            </div><!-- /.shopping-cart-btn -->
                        </td>
                    </tr>
                </tfoot>
            </table><!-- /table -->
        </div>
    </div><!-- /.shopping-cart-table -->				<div class="col-md-4 col-sm-12 estimate-ship-tax">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <span class="estimate-title">Estimate shipping and tax</span>
                        <p>Enter your destination to get shipping and tax.</p>
                    </th>
                </tr>
            </thead><!-- /thead -->
            <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label class="info-title control-label">Country <span>*</span></label>
                                <select class="form-control unicase-form-control selectpicker">
                                    <option>--Select options--</option>
                                    <option>India</option>
                                    <option>SriLanka</option>
                                    <option>united kingdom</option>
                                    <option>saudi arabia</option>
                                    <option>united arab emirates</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="info-title control-label">State/Province <span>*</span></label>
                                <select class="form-control unicase-form-control selectpicker">
                                    <option>--Select options--</option>
                                    <option>TamilNadu</option>
                                    <option>Kerala</option>
                                    <option>Andhra Pradesh</option>
                                    <option>Karnataka</option>
                                    <option>Madhya Pradesh</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="info-title control-label">Zip/Postal Code</label>
                                <input type="text" class="form-control unicase-form-control text-input" placeholder="">
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn-upper btn btn-primary">GET A QOUTE</button>
                            </div>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div><!-- /.estimate-ship-tax -->

    <div class="col-md-4 col-sm-12 estimate-ship-tax">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <span class="estimate-title">Discount Code</span>
                        <p>Enter your coupon code if you have one..</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
                            </div>
                            <div class="clearfix pull-right">
                                <button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
                            </div>
                        </td>
                    </tr>
            </tbody><!-- /tbody -->
        </table><!-- /table -->
    </div><!-- /.estimate-ship-tax -->

    <div class="col-md-4 col-sm-12 cart-shopping-total">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <div class="cart-sub-total">
                            Montant HT<span class="inner-left-md">{{Cart::subtotal()}}</span>
                        </div>
                        <div class="cart-tax">
                            Taxe<span class="inner-left-md">{{Cart::tax()}}</span>
                        </div>
                        <div class="cart-grand-total">
                            Total<span class="inner-left-md">{{Cart::total()}}</span>
                        </div>
                    </th>
                </tr>
            </thead><!-- /thead -->
            <tbody>
                    <tr>
                        <td>
                            <div class="cart-checkout-btn pull-right">
                                <button type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
                                <span class="">Checkout with multiples address!</span>
                            </div>
                        </td>
                    </tr>
            </tbody><!-- /tbody -->
        </table><!-- /table -->
    </div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
            </div> <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">

            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->
                </div><!-- /.owl-carousel #logo-slider -->
            </div><!-- /.logo-slider-inner -->

    </div><!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div><!-- /.body-content -->
    @else
        <div class="body-content outer-top-xs">
            <p>Votre panier est vide.</p>
        </div>
    @endif
@endsection
