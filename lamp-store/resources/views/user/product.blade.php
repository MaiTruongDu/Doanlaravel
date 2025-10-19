@extends('layout.layout_user')

@section('title', 'Products')

@push('styles')
    <!-- CSS chỉ cho trang product -->
    <link href="{{ asset('css/form.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="product-model">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Products</li>
        </ol>

        <h2>Our Products</h2>

        <div class="col-md-9 product-model-sec">
            {{-- Lặp hoặc chèn sản phẩm thật ở đây; mình giữ giống template gốc --}}
            @foreach (range(1,12) as $i)
            <div class="product-grid">
                <div class="more-product"><span> </span></div>
                <div class="product-img b-link-stripe b-animate-go thickbox">
                    <a href="{{ url('single') }}">
                        <img src="{{ asset('images/p'.$i.'.jpg') }}" class="img-responsive" alt="Product {{ $i }}">
                    </a>
                    <div class="b-wrapper">
                        <h4 class="b-animate b-from-left b-delay03">
                            <button type="button"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span> Quick View</button>
                        </h4>
                    </div>
                </div>

                <div class="product-info simpleCart_shelfItem">
                    <div class="product-info-cust prt_name">
                        <h4>Lights #{{ $i }}</h4>
                        <span class="item_price">$187.95</span>
                        <div class="ofr">
                            <p class="pric1"><del>Rs 280</del></p>
                            <p class="disc">[12% Off]</p>
                        </div>

                        <input type="text" class="item_quantity" value="1" />
                        <input type="button" class="item_add items" value="ADD">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="clearfix"></div>
        </div>

        <!-- SIDEBAR -->
        <div class="rsidebar span_1_of_left">
            <section class="sky-form">
                <div class="product_right">
                    <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Categories</h4>

                    <div class="tab1">
                        <ul class="place">
                            <li class="sort">Home Decorates</li>
                            <li class="by"><img src="{{ asset('images/do.png') }}" alt=""></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="single-bottom">
                            <a href="#"><p>Lanterns</p></a>
                            <a href="#"><p>Wall Lamps</p></a>
                            <a href="#"><p>Table Lamps</p></a>
                        </div>
                    </div>

                    <div class="tab2">
                        <ul class="place">
                            <li class="sort">Festive Needs</li>
                            <li class="by"><img src="{{ asset('images/do.png') }}" alt=""></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="single-bottom">
                            <a href="#"><p>Lanterns</p></a>
                            <a href="#"><p>Disco Lights</p></a>
                        </div>
                    </div>

                    <!-- thêm tab3..tab5 nếu cần giống gốc -->
                </div>
            </section>

            <section class="sky-form">
                <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> DISCOUNTS</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="discount[]" checked><i></i>Upto - 10% (20)</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="discount[]"><i></i>40% - 50% (5)</label>
                        <label class="checkbox"><input type="checkbox" name="discount[]"><i></i>30% - 20% (7)</label>
                    </div>
                </div>
            </section>

            <section class="sky-form">
                <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Price</h4>
                <ul class="dropdown-menu1">
                    <li>
                        <a href="#">
                            <div id="slider-range"></div>
                            <input type="text" id="amount" readonly style="border:0; font-weight:normal;" />
                        </a>
                    </li>
                </ul>
            </section>

            <section class="sky-form">
                <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Type</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="type[]" checked><i></i> Lights (30)</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="type[]"><i></i> Diwali Lights (30)</label>
                        <label class="checkbox"><input type="checkbox" name="type[]"><i></i> Tube Lights (30)</label>
                    </div>
                </div>
            </section>

            <section class="sky-form">
                <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Brand</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="brand[]" checked><i></i> Everyday</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="brand[]"><i></i> Anchor</label>
                        <label class="checkbox"><input type="checkbox" name="brand[]"><i></i> Philips</label>
                    </div>
                </div>
            </section>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
@endsection

@push('scripts')
    <!-- JS chỉ cho product -->
    <script src="{{ asset('js/jquery.jscrollpane.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            // Ẩn tất cả single-bottom ban đầu (như template gốc)
            $('.tab1 .single-bottom, .tab2 .single-bottom, .tab3 .single-bottom, .tab4 .single-bottom, .tab5 .single-bottom').hide();

            // click mở đóng từng tab
            $('.tab1 ul').click(function(){ $('.tab1 .single-bottom').slideToggle(300); $('.tab2 .single-bottom, .tab3 .single-bottom, .tab4 .single-bottom, .tab5 .single-bottom').hide(); });
            $('.tab2 ul').click(function(){ $('.tab2 .single-bottom').slideToggle(300); $('.tab1 .single-bottom, .tab3 .single-bottom, .tab4 .single-bottom, .tab5 .single-bottom').hide(); });
            $('.tab3 ul').click(function(){ $('.tab3 .single-bottom').slideToggle(300); $('.tab1 .single-bottom, .tab2 .single-bottom, .tab4 .single-bottom, .tab5 .single-bottom').hide(); });
            $('.tab4 ul').click(function(){ $('.tab4 .single-bottom').slideToggle(300); $('.tab1 .single-bottom, .tab2 .single-bottom, .tab3 .single-bottom, .tab5 .single-bottom').hide(); });
            $('.tab5 ul').click(function(){ $('.tab5 .single-bottom').slideToggle(300); $('.tab1 .single-bottom, .tab2 .single-bottom, .tab3 .single-bottom, .tab4 .single-bottom').hide(); });

            // jScrollPane (nếu bạn đã thêm plugin CSS/JS)
            if ($.fn.jScrollPane) {
                $('.scroll-pane').jScrollPane();
            }

            // Price slider
            if ($.fn.slider) {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 100000,
                    values: [500, 100000],
                    slide: function(event, ui) {
                        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                    }
                });
                $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
            }
        });
    </script>
@endpush
