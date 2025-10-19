{{-- resources/views/product/single.blade.php --}}
@extends('layout.layout_user')

@section('title', isset($product) ? $product->name.' | Lighting Store' : 'Product Detail | Lighting Store')

@section('content')
<!-- product detail -->
<div class="product">
    <div class="container">
        <div class="product-price1">
            <div class="top-sing">

                {{-- left: slider --}}
                <div class="col-md-7 single-top">
                    {{-- nếu layout chưa include flexslider.css / form.css, tạm include ở đây --}}
                    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
                    <link rel="stylesheet" href="{{ asset('css/form.css') }}" type="text/css" />

                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ asset('images/si.jpg') }}">
                                <div class="thumb-image">
                                    <img src="{{ asset('images/si.jpg') }}" data-imagezoom="true" class="img-responsive" alt=""/>
                                </div>
                            </li>
                            <li data-thumb="{{ asset('images/si2.jpg') }}">
                                <div class="thumb-image">
                                    <img src="{{ asset('images/si2.jpg') }}" data-imagezoom="true" class="img-responsive" alt=""/>
                                </div>
                            </li>
                            <li data-thumb="{{ asset('images/si3.jpg') }}">
                                <div class="thumb-image">
                                    <img src="{{ asset('images/si3.jpg') }}" data-imagezoom="true" class="img-responsive" alt=""/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- right: product info --}}
                <div class="col-md-5 single-top-in simpleCart_shelfItem">
                    <div class="single-para">
                        <h4>{{ $product->name ?? 'Lighting Wood Carved Mop Glass Double Wall Lamp' }}</h4>

                        <h5 class="item_price">
                            {{ isset($product) ? ('$'.number_format($product->price, 2)) : '$ 500.00' }}
                        </h5>

                        <p class="para">
                            {{ $product->short_description ?? 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus porttitor tincidunt elementum nisi a, euismod rhoncus urna.' }}
                        </p>

                        <div class="prdt-info-grid">
                            <ul>
                                <li>- Brand : {{ $product->brand ?? 'Fos Lighting' }}</li>
                                <li>- Dimensions : {{ $product->dimensions ?? '(LXBXH) in cms of...' }}</li>
                                <li>- Color : {{ $product->color ?? 'Brown' }}</li>
                                <li>- Material : {{ $product->material ?? 'Wood' }}</li>
                            </ul>
                        </div>

                        <div class="check">
                            <p>
                                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                Enter pin code for delivery &amp; availability
                            </p>

                            <form class="navbar-form" method="GET" action="{{ url('/check-pin') }}">
                                <div class="form-group">
                                    <input type="text" name="pin" class="form-control" placeholder="Enter Pin code">
                                </div>
                                <button type="submit" class="btn btn-default">Verify</button>
                            </form>
                        </div>

                        <a href="#" class="add-cart item_add">ADD TO CART</a>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

        {{-- related / bottom products --}}
        <div class="bottom-prdt">
            <div class="btm-grid-sec">
                @if(!empty($related) && count($related))
                    @foreach($related as $r)
                        <div class="col-md-2 btm-grid">
                            <a href="{{ url('/product/'.$r->id) }}">
                                <img src="{{ asset('images/' . ($r->image ?? 'p3.jpg')) }}" alt="{{ $r->name ?? 'Product' }}"/>
                                <h4>{{ $r->name ?? 'Product' }}</h4>
                                <span>{{ isset($r->price) ? '$'.number_format($r->price,2) : '$0.00' }}</span>
                            </a>
                        </div>
                    @endforeach
                @else
                    {{-- fallback static blocks (giữ layout như gốc) --}}
                    <div class="col-md-2 btm-grid">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('images/p3.jpg') }}" alt="Product#1"/>
                            <h4>Product#1</h4>
                            <span>$1200</span>
                        </a>
                    </div>
                    <div class="col-md-2 btm-grid">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('images/p10.jpg') }}" alt="Product#2"/>
                            <h4>Product#1</h4>
                            <span>$700</span>
                        </a>
                    </div>
                    <div class="col-md-2 btm-grid">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('images/p5.jpg') }}" alt="Product#3"/>
                            <h4>Product#1</h4>
                            <span>$1300</span>
                        </a>
                    </div>
					 <div class="col-md-2 btm-grid">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('images/p4.jpg') }}" alt="Product#4"/>
                            <h4>Product#1</h4>
                            <span>$9000</span>
                        </a>
                    </div>
					 <div class="col-md-2 btm-grid">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('images/p2.jpg') }}" alt="Product#5"/>
                            <h4>Product#1</h4>
                            <span>$450</span>
                        </a>
                    </div>
                @endif

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

{{-- thêm các script cần cho imagezoom + flexslider --}}
<script src="{{ asset('js/imagezoom.js') }}"></script>
<script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
<script>
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
@endsection
