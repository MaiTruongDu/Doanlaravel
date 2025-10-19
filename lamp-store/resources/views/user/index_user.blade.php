@extends('layout.layout_user')

@section('title', 'Lighting Store | Home')

@section('content')

<!-- SLIDER (chỉ có ở trang chủ) -->
<div class="slider">
    <div class="callbacks_container">
        <ul class="rslides" id="slider">
            <li>
                <div class="banner1">
                    <div class="banner-info">
                        <h3>Morbi lacus hendrerit efficitur.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner2">
                    <div class="banner-info">
                        <h3>Phasellus elementum tincidunt.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner3">
                    <div class="banner-info">
                        <h3>Maecenas interposuere volutpat.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- DANH SÁCH SẢN PHẨM -->
<div class="items">
    <div class="container">
        <div class="items-sec">
            <div class="col-md-3 feature-grid">
                <a href="{{ url('/product') }}">
                    <img src="{{ asset('images/img1.jpg') }}" alt="Lighting #1" />
                    <div class="arrival-info">
                        <h4>Lighting #1</h4>
                        <p>Rs 12000</p>
                        <span class="pric1"><del>Rs 18000</del></span>
                        <span class="disc">[12% Off]</span>
                    </div>
                    <div class="viw">
                        <a href="{{ url('/product') }}"><span class="glyphicon glyphicon-eye-open"></span>View</a>
                    </div>
                </a>
            </div>

            <div class="col-md-3 feature-grid">
                <a href="{{ url('/product') }}">
                    <img src="{{ asset('images/img2.jpg') }}" alt="Lighting #2" />
                    <div class="arrival-info">
                        <h4>Lighting #2</h4>
                        <p>Rs 8000</p>
                        <span class="pric1"><del>Rs 10000</del></span>
                        <span class="disc">[20% Off]</span>
                    </div>
                    <div class="viw">
                        <a href="{{ url('/product') }}"><span class="glyphicon glyphicon-eye-open"></span>View</a>
                    </div>
                </a>
            </div>

            <div class="col-md-3 feature-grid">
                <a href="{{ url('/product') }}">
                    <img src="{{ asset('images/img3.jpg') }}" alt="Lighting #3" />
                    <div class="arrival-info">
                        <h4>Lighting #3</h4>
                        <p>Rs 6000</p>
                        <span class="pric1"><del>Rs 9000</del></span>
                        <span class="disc">[33% Off]</span>
                    </div>
                    <div class="viw">
                        <a href="{{ url('/product') }}"><span class="glyphicon glyphicon-eye-open"></span>View</a>
                    </div>
                </a>
            </div>

            <div class="col-md-3 feature-grid">
                <a href="{{ url('/product') }}">
                    <img src="{{ asset('images/img4.jpg') }}" alt="Lighting #4" />
                    <div class="arrival-info">
                        <h4>Lighting #4</h4>
                        <p>Rs 15000</p>
                        <span class="pric1"><del>Rs 19000</del></span>
                        <span class="disc">[10% Off]</span>
                    </div>
                    <div class="viw">
                        <a href="{{ url('/product') }}"><span class="glyphicon glyphicon-eye-open"></span>View</a>
                    </div>
                </a>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- ƯU ĐÃI / KHUYẾN MÃI -->
<div class="offers">
    <div class="container">
        <h3>End of Season Sale</h3>
        <div class="offer-grids">
            <div class="col-md-6 grid-left">
                <a href="#">
                    <div class="offer-grid1">
                        <div class="ofr-pic">
                            <img src="{{ asset('images/ofr2.jpeg') }}" class="img-responsive" alt="Emergency Lights" />
                        </div>
                        <div class="ofr-pic-info">
                            <h4>Emergency Lights <br>& Led Bulbs</h4>
                            <span>UP TO 60% OFF</span>
                            <p>Shop Now</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 grid-right">
                <a href="#">
                    <div class="offer-grid2">
                        <div class="ofr-pic-info2">
                            <h4>Flat Discount</h4>
                            <span>UP TO 30% OFF</span>
                            <h5>Outdoor Gate Lights</h5>
                            <p>Shop Now</p>
                        </div>
                        <div class="ofr-pic2">
                            <img src="{{ asset('images/ofr3.jpg') }}" class="img-responsive" alt="Outdoor Gate Lights" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>

@endsection
