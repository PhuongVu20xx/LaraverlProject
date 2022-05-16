@extends('layouts.layout')

@section('header')
@include('layouts.header')
<div class="backgroundheader"></div>
@endsection

@section('menu')
<link rel="stylesheet" href="{{asset('css/product.css')}}">
<div class="form-group">
    <select name="sweet-grocery" id="sweet-grocery" class="form-control input-lg dynamic" data-dependent="state">
        <option value="sweet-grocery">Sweet Grocery</option>
        <option value="breakfast">Breakfast</option>
        <option value="biscuits-cakes">Biscuits & Cakes</option>
        <option value="chocolate-confectionery">Chocolate & Confectionery</option>
        <option value="hot-drinks">Hot Drinks</option>
        <option value="spread">Spread</option>
        <option value="baking-ingredients">Baking Ingredients</option>
        <option value="condensedmilk-nutmilk">Condensed Milk / Nut Milk</option>
        <option value="fruitcan-snack">Fruit Can / Snack</option>
    </select>

    <select name="salted-grocery" id="salted-grocery" class="form-control input-lg dynamic" data-dependent="state">
        <option value="salted-grocery">Salted Grocery</option>
        <option value="seasoning">Seasoning</option>
        <option value="sauce-condiment">Sauce & Condiment</option>
        <option value="pasta-starchy">Pasta & starchy</option>
        <option value="rice-semolina-drybean">Rice/Semolina & Drybean</option>
        <option value="canned-food">Canned Food (Vegetable / Meat / Fish)</option>
        <option value="convenient-food">Convenient Food</option>
        <option value="salted-snack">Salted Snack</option>
    </select>
    
    <select name="fresh-food" id="fresh-food" class="form-control input-lg dynamic" data-dependent="state">
        <option value="fresh-food">Fresh Food</option>
        <option value="fruit">Fruit</option>
        <option value="vegetable">Vegetable</option>
        <option value="meat">Meat</option>
        <option value="fish">Fish</option>
        <option value="delicatessen">Delicatessen</option>
        <option value="dairy">Dairy</option>
        <option value="cheese">Cheese</option>
    </select>
    
    <select name="frorzen-food" id="frorzen-food" class="form-control input-lg dynamic" data-dependent="state">
        <option value="">Frozen Food</option>
        <option value="ready-to-cook">Ready To Cook</option>
        <option value="meat-fish">Meat & Fish</option>
        <option value="fruit-vegetable">Fruit & Vegetable</option>
        <option value="icecream">Icecream</option>
        <option value="pizza">Pizza</option>
        <option value="dessert">Dessert</option>
    </select>
    
    <select name="bakery-pastry" id="bakery-pastry" class="form-control input-lg dynamic" data-dependent="state">
        <option value="">Bakery & Pastry</option> 
        <option value="bakery">Bakery</option> 
        <option value="viennoiserie">Viennoiserie</option> 
        <option value="sweet-pastry">Sweet Pastry</option> 
        <option value="salted-pastry">Salted Pastry</option> 
    </select>
    
    <select name="beverage" id="beverage" class="form-control input-lg dynamic" data-dependent="state">
        <option value="beverage">Beverage</option>
        <option value="juice-syrup">Juice & Syrup</option>
        <option value="water">Water</option>
        <option value="soft">Soft</option>
        <option value="beer-cider">Beer / Cider</option>
    </select>
    
    <select name="baby" id="baby" class="form-control input-lg dynamic" data-dependent="state">
        <option value="baby">Baby</option>
        <option value="child-care">Child Care</option>
        <option value="food">Food</option>
    </select>
        
    <select name="pet" id="pet" class="form-control input-lg dynamic" data-dependent="state">
        <option value="pet">Pet</option>
        <option value="food">Food</option>
        <option value="care-accessories">Care / Accessories</option>
    </select>
    
    <select name="beauty-cosmetic" id="beauty-cosmetic" class="form-control input-lg dynamic" data-dependent="state">
        <option value="beauty-cosmetic">Beauty & Cosmetic</option>
        <option value="body-care">Body Care</option>
        <option value="hair-care">Hair Care</option>
        <option value="oral-care">Oral Care</option>
        <option value="skin-care">Skin Care</option>
        <option value="men-care">Men Care</option>
        <option value="sun-care">Sun Care</option>
        <option value="intimate-care">Intimate Care</option>
        <option value="emergency-care">Emergency Care</option>
        <option value="food-additive">Food Additive</option>
        <option value="tissue">Tissue</option>
    </select>
    
    <select name="household" id="household" class="form-control input-lg dynamic" data-dependent="state">
        <option value="household">Household</option>
        <option value="linen">Linen</option>
        <option value="kitchen">Kitchen</option>
        <option value="bathroom">Bathroom</option>
        <option value="other-purpose">Other Purpose</option>
        <option value="tableware-disposable">Tableware - Disposable</option>
        <option value="battery-stationery">Battery - Stationery</option>
    </select>
</div>
@endsection


@section('footer')
@include('layouts.footer')
@endsection