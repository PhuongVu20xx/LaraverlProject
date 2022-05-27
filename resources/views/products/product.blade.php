@extends('layouts.layout')

@section('header')
@include('layouts.header')
<div class="backgroundheader"></div>
@endsection

@section('body')
<link rel="stylesheet" href="{{asset('css/product/product.css')}}">

<div class="wrap-breadcrumb">
    <ul>
        <li class="item-link"><a href="#" class="link">home</a></li>
        <li class="item-link"><span>Product</span></li>
    </ul>
</div>

<section class="col-lg-12">
    <div class="product-container">
        <div class="row">
            <div class="col-lg-3 col-md-3 order-1 col-left-sidebar">
                <div class="product-menu-container">
                    <ul>
                        <li id="sweet-grocery">
                            <a href="#sweet-grocery">
                                <span>Sweet Grocery</span>
                            </a>
                            <ul id="sweet-grocery-dropdown">
                                <li><a href="#breakfast">Breakfast</a></li>
                                <li><a href="#biscuits-cakes">Biscuits & Cakes</a></li>
                                <li><a href="#chocolate-confectionery">Chocolate & Confectionery</a></li>
                                <li><a href="#hot-drinks">Hot Drinks</a></li>
                                <li><a href="#spread">Spread</a></li>
                                <li><a href="#baking-ingredients">Baking Ingredients</a></li>
                                <li><a href="#condensedmilk-nutmilk">Condensed Milk / Nut Milk</a></li>
                                <li><a href="#fruitcan-snack">Fruit Can / Snack</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul>
                        <li id="salted-grocery">
                            <a href="#salted-grocery">
                                <span>Salted Grocery</span>
                            </a>
                            <ul>
                                <li><a href="#seasoning">Seasoning</a></li>
                                <li><a href="#sauce-condiment">Sauce & Condiment</a></li>
                                <li><a href="#pasta-starchy">Pasta & starchy</a></li>
                                <li><a href="#rice-semolina-drybean">Rice/Semolina & Drybean</a></li>
                                <li><a href="#canned-food">Canned Food (Vegetable / Meat / Fish)</a></li>
                                <li><a href="#convenient-food">Convenient Food</a></li>
                                <li><a href="#salted-snack">Salted Snack</a></li>
                            </ul>
                        </li> 
                    </ul>

                    <ul>
                        <li id="fresh-food">
                            <a href="#fresh-food">
                                <span>Fresh Food</span>
                            </a>
                            <ul>
                                <li><a href="#fruit">Fruit</a></li>
                                <li><a href="#vegetable">Vegetable</a></li>
                                <li><a href="#meat">Meat</a></li>
                                <li><a href="#fish">Fish</a></li>
                                <li><a href="#delicatessen">Delicatessen</a></li>
                                <li><a href="#dairy">Dairy</a></li>
                                <li><a href="#cheese">Cheese</a></li>
                            </ul>
                        </li> 
                    </ul>

                    <ul>
                        <li id="frozen-food">
                            <a href="#frozen-food">
                                <span>Frozen Food</span>
                            </a>
                            <ul>
                                <li><a href="#ready-to-cook">Ready To Cook</a></li>
                                <li><a href="#meat-fish">Meat & Fish</a></li>
                                <li><a href="#fruit-vegetable">Fruit & Vegetable</a></li>
                                <li><a href="#icecream">Icecream</a></li>
                                <li><a href="#pizza">Pizza</a></li>
                                <li><a href="#dessert">Dessert</a></li>
                            </ul>
                        </li> 
                    </ul>

                    <ul>
                        <li id="bakery-pastry">
                            <a href="#bakery-pastry">
                                <span>Bakery & Pastry</span>
                            </a>
                            <ul>
                                <li><a href="#bakery">Bakery</a></li>
                                <li><a href="#viennoiserie">Viennoiserie</a></li>
                                <li><a href="#sweet-pastry">Sweet Pastry</a></li>
                                <li><a href="#salted-pastry">Salted Pastry</a></li>
                            </ul>
                        </li> 
                    </ul>

                    <ul>
                        <li id="beverage">
                            <a href="#beverage">
                                <span>Beverage</span>
                            </a>
                            <ul>
                                <li><a href="#juice-syrup">Juice & Syrup</a></li>
                                <li><a href="#water">Water</a></li>
                                <li><a href="#soft">Soft</a></li>
                                <li><a href="#beer-cider">Beer / Cider</a></li>
                            </ul>
                        </li> 
                    </ul>

                    <ul>
                        <li id="baby">
                            <a href="#baby">
                                <span>Baby</span>
                            </a>
                            <ul>
                                <li><a href="#child-care">Child Care</a></li>
                                <li><a href="#food">Food</a></li>
                            </ul>
                        </li> 
                    </ul>

                    <ul>
                        <li id="pet">
                            <a href="#pet">
                                <span>Pet</span>
                            </a>
                            <ul>
                                <li><a href="#food">Food</a></li>
                                <li><a href="#care-accessories">Care / Accessories</a></li>
                            </ul>
                        </li> 
                    </ul>

                    <ul>
                        <li id="beauty-cosmetic">
                            <a href="#beauty-cosmetic">
                                <span>Beauty & Cosmetic</span>
                            </a>
                            <ul>
                                <li><a href="#body-care">Body Care</a></li>
                                <li><a href="#hair-care">Hair Care</a></li>
                                <li><a href="#oral-care">Oral Care</a></li>
                                <li><a href="#skin-care">Skin Care</a></li>
                                <li><a href="#men-care">Men Care</a></li>
                                <li><a href="#sun-care">Sun Care</a></li>
                                <li><a href="#intimate-care">Intimate Care</a></li>
                                <li><a href="#emergency-care">Emergency Care</a></li>
                                <li><a href="#food-additive">Food Additive</a></li>
                                <li><a href="#tissue">Tissue</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul>
                        <li id="household">
                            <a href="#household">
                                <span>Household</span>
                            </a>
                            <ul>
                                <li><a href="#linen">Linen</a></li>
                                <li><a href="#kitchen">Kitchen</a></li>
                                <li><a href="#bathroom">Bathroom</a></li>
                                <li><a href="#other-purpose">Other Purpose</a></li>
                                <li><a href="#tableware-disposable">Tableware - Disposable</a></li>
                                <li><a href="#battery-stationery">Battery - Stationery</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
                
            <div class="col-lg-9 col-md-8 order-2 col-right-main">
                <div class="product-content-container">
                    <!-- toolbar-top -->
                    <div class="wrap-shop-control">
                        <h1 class="shop-title">FEATURED PRODUCT</h1>

                        <div class="wrap-right">
                            <div class="sort-item orderby ">
                                    <select name="orderby" class="use-chosen" >
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                            </div>

                            <div class="sort-item product-per-page">
                                    <select name="post-per-page" class="use-chosen" >
                                        <option value="12" selected="selected">12 per page</option>
                                        <option value="24">24 per page</option>
                                        <option value="36">36 per page</option>
                                    </select>
                            </div>
                        </div>
                        
                    </div>

                    <!-- product-list -->
                    <div class="row">
                        <ul class="product-list grid-products equal-container">

                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="Camembert Raw Milk AOP (250g)">
                                            <figure><img src="{{asset('img/product/SKUF104174.jpg')}}" alt="Camembert Raw Milk AOP (250g)"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name">Camembert Raw Milk AOP (250g)</a>
                                        <div class="wrap-price"><span class="product-price">158.000đ</span></div>
                                        <a href="#" class="btn add-to-cart" title="Add To Cart">Add To Cart</a>
                                        <a href="#" class="btn add-to-wishlist" title="Add To Wish List">Add To Wish List</a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="Absolute Organic Coconut Cream BPA Free(400g)">
                                            <figure><img src="{{asset('img/product/SKUF144663(3).jpg')}}" alt="Absolute Organic Coconut Cream BPA Free(400g)"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Absolute Organic Coconut Cream BPA Free(400g)</span></a>
                                        <div class="wrap-price"><span class="product-price">171.000đ</span></div>
                                        <a href="#" class="btn add-to-cart" title="Add To Cart">Add To Cart</a>
                                        <a href="#" class="btn add-to-wishlist" title="Add To Wish List">Add To Wish List</a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="Balance Dark Chocolate Bar 35g">
                                            <figure><img src="{{asset('img/product/SKUF119627(1).jpg')}}" alt="Balance Dark Chocolate Bar 35g"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Balance Dark Chocolate Bar 35g</span></a>
                                        <div class="wrap-price"><span class="product-price">63.000đ</span></div>
                                        <a href="#" class="btn add-to-cart" title="Add To Cart">Add To Cart</a>
                                        <a href="#" class="btn add-to-wishlist" title="Add To Wish List">Add To Wish List</a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="Absolute Organic Lentils (400g)">
                                            <figure><img src="{{asset('img/product/SKUF144669(1).jpg')}}" alt="Absolute Organic Lentils (400g)"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Absolute Organic Lentils (400g)</span></a>
                                        <div class="wrap-price"><span class="product-price">99.000đ</span></div>
                                        <a href="#" class="btn add-to-cart" title="Add To Cart">Add To Cart</a>
                                        <a href="#" class="btn add-to-wishlist" title="Add To Wish List">Add To Wish List</a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="VNHP Aus Black Angus Tomahawk Portion">
                                            <figure><img src="{{asset('img/product/SKUF151302.jpg')}}" alt="VNHP Aus Black Angus Tomahawk Portion"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>VNHP Aus Black Angus Tomahawk Portion</span></a>
                                        <div class="wrap-price"><span class="product-price">1.292.500đ</span></div>
                                        <a href="#" class="btn add-to-cart" title="Add To Cart">Add To Cart</a>
                                        <a href="#" class="btn add-to-wishlist" title="Add To Wish List">Add To Wish List</a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="Blackberry">
                                            <figure><img src="{{asset('img/product/SKUF158700.jpg')}}" alt="Blackberry"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Blackberry</span></a>
                                        <div class="wrap-price"><span class="product-price">85.000đ</span></div>
                                        <a href="#" class="btn add-to-cart" title="Add To Cart">Add To Cart</a>
                                        <a href="#" class="btn add-to-wishlist" title="Add To Wish List">Add To Wish List</a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="Dragon Fruit Pink (650g)">
                                            <figure><img src="{{asset('img/product/SKUF137012.jpg')}}" alt="Dragon Fruit Pink (650g)"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Dragon Fruit Pink (650g)</span></a>
                                        <div class="wrap-price"><span class="product-price">25.350đ</span></div>
                                        <a href="#" class="btn add-to-cart" title="Add To Cart">Add To Cart</a>
                                        <a href="#" class="btn add-to-wishlist" title="Add To Wish List">Add To Wish List</a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="Dabo Body Wash Soft Milk - Whitening (750ml)">
                                            <figure><img src="{{asset('img/product/SKUH102947.jpg')}}" alt="Dabo Body Wash Soft Milk - Whitening (750ml)"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Dabo Body Wash Soft Milk - Whitening (750ml)</span></a>
                                        <div class="wrap-price"><span class="product-price">168.000đ</span></div>
                                        <a href="#" class="btn add-to-cart" title="Add To Cart">Add To Cart</a>
                                        <a href="#" class="btn add-to-wishlist" title="Add To Wish List">Add To Wish List</a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="Homemade Panini Bread (PC)">
                                            <figure><img src="{{asset('img/product/SKUF104174.jpg')}}" alt="Homemade Panini Bread (PC)"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Homemade Panini Bread (PC)</span></a>
                                        <div class="wrap-price"><span class="product-price">15.000đ</span></div>
                                        <a href="#" class="btn add-to-cart" title="Add To Cart">Add To Cart</a>
                                        <a href="#" class="btn add-to-wishlist" title="Add To Wish List">Add To Wish List</a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="Bjorg Organic Biscuit Buckwheat Chocolate (250g)">
                                            <figure><img src="{{asset('img/product/SKUF158110(1).jpg')}}" alt="Bjorg Organic Biscuit Buckwheat Chocolate (250g)"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Bjorg Organic Biscuit Buckwheat Chocolate (250g)</span></a>
                                        <div class="wrap-price"><span class="product-price">212.000đ</span></div>
                                        <a href="#" class="btn add-to-cart" title="Add To Cart">Add To Cart</a>
                                        <a href="#" class="btn add-to-wishlist" title="Add To Wish List">Add To Wish List</a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="Do Food Tom Yum Soup Aluminium Foil 200g">
                                            <figure><img src="{{asset('img/product/SKUF160607(1).jpg')}}" alt="Do Food Tom Yum Soup Aluminium Foil 200g"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Do Food Tom Yum Soup Aluminium Foil 200g</span></a>
                                        <div class="wrap-price"><span class="product-price">125.000đ</span></div>
                                        <a href="#" class="btn add-to-cart" title="Add To Cart">Add To Cart</a>
                                        <a href="#" class="btn add-to-wishlist" title="Add To Wish List">Add To Wish List</a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="Annam Gourmet Wahoo Fillet">
                                            <figure><img src="{{asset('img/product/SKUF151451.jpg')}}" alt="Annam Gourmet Wahoo Fillet"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Annam Gourmet Wahoo Fillet</span></a>
                                        <div class="wrap-price"><span class="product-price">361.000đ</span></div>
                                        <a href="#" class="btn add-to-cart" title="Add To Cart">Add To Cart</a>
                                        <a href="#" class="btn add-to-wishlist" title="Add To Wish List">Add To Wish List</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- wrap-pagination -->
                    <div class="wrap-pagination-info">
                        <ul class="page-numbers">
                            <li><span class="page-number-item current" >1</span></li>
                            <li><a class="page-number-item" href="#" >2</a></li>
                            <li><a class="page-number-item" href="#" >3</a></li>
                            <li><a class="page-number-item next-link" href="#" >Next</a></li>
                        </ul>
                        <p class="result-count">Showing 1-8 of 12 result</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('footer')
@include('layouts.footer')
@endsection