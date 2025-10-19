@extends('layout.layout_user')

@section('title', 'Lighting Store | Checkout')

@section('content')
<div class="container">
    <div class="check-sec">	 
        <div class="col-md-3 cart-total">
            <a class="continue" href="{{ url('/product') }}">Continue to basket</a>
            <div class="price-details">
                <h3>Price Details</h3>
                <span>Total</span>
                <span class="total1">6200.00</span>
                <span>Discount</span>
                <span class="total1">10%(Festival Offer)</span>
                <span>Delivery Charges</span>
                <span class="total1">150.00</span>
                <div class="clearfix"></div>				 
            </div>	
            <ul class="total_price">
                <li class="last_price"><h4>TOTAL</h4></li>	
                <li class="last_price"><span>6150.00</span></li>			   
            </ul> 
            <div class="clearfix"></div>
            <a class="order" href="#">Place Order</a>
            <div class="total-item">
                <h3>OPTIONS</h3>
                <h4>COUPONS</h4>
                <a class="cpns" href="#">Apply Coupons</a>
            </div>
        </div>

        <div class="col-md-9 cart-items">
            <h1>My Shopping Bag (2)</h1>

            <div class="cart-header">
                <div class="close1"></div>
                <div class="cart-sec simpleCart_shelfItem">
                    <div class="cart-item cyc">
                        <img src="{{ asset('images/p4.jpg') }}" class="img-responsive" alt=""/>
                    </div>
                    <div class="cart-item-info">
                        <h3><a href="#">Rock Light Emergency Lights</a><span>Model No: RL-5511S</span></h3>
                        <ul class="qty">
                            <li><p>Size : 5</p></li>
                            <li><p>Qty : 1</p></li>
                        </ul>
                        <div class="delivery">
                            <p>Service Charges : Rs.100.00</p>
                            <span>Delivered in 2-3 business days</span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="cart-header2">
                <div class="close2"></div>
                <div class="cart-sec simpleCart_shelfItem">
                    <div class="cart-item cyc">
                        <img src="{{ asset('images/p3.jpg') }}" class="img-responsive" alt=""/>
                    </div>
                    <div class="cart-item-info">
                        <h3><a href="#">Show Lights</a><span>Model No: SL-3578</span></h3>
                        <ul class="qty">
                            <li><p>Size : 5</p></li>
                            <li><p>Qty : 1</p></li>
                        </ul>
                        <div class="delivery">
                            <p>Service Charges : Rs.100.00</p>
                            <span>Delivered in 2-3 business days</span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>		
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('.close1').click(function() {
        $('.cart-header').fadeOut('slow', function() {
            $(this).remove();
        });
    });
    $('.close2').click(function() {
        $('.cart-header2').fadeOut('slow', function() {
            $(this).remove();
        });
    });
});
</script>
@endsection
