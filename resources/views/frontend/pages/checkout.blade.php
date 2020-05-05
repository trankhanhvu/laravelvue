@extends('frontend.layout.index')

@section('breadcrum')
<!-- broadcamp area start-->
<div class="broadcamp-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Cart Page</h2>
                <h4><a href="{{url('index')}}">Home </a> / Shop / Checkout</h4>
            </div>
        </div>
    </div>
</div>
<!-- broadcamp area end-->
@endsection

@section('content')
<!-- Checkout top area start-->
<div class="checkout-top-area wow fadeInUp">
    <div class="container">
        @if (!Auth::check())
        <div class="row">
            <!-- checkout top content start -->
            <div class="col-md-12">
                <div class="checkout-header">
                    <h4><i class="fa fa-users"></i> Returning customer? <a href="login.html">Click here to login</a>
                    </h4>
                </div>
                <div class="checkout-content">
                    <p>If you have shopped with us before, please enter your details in the boxes below.
                        <br> If you are a new customer, please proceed to the Billing & Shipping section.</p>
                    <div class="checkout-top-form">
                        <form action="contact.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="ccds">Username or email *</label>
                                    <input type="email" id="ccds">
                                </div>
                                <div class="col-md-6">
                                    <label for="item2">Password *</label>
                                    <input type="password" id="item2">
                                </div>
                            </div>
                            <a class="login-btn" href="login.html">Login</a>
                            <span class="check_box2">
                                <input type="checkbox" id="c2" name="cb">
                                <label for="c2">Remember me</label>
                                <a href="#">Lost your password?</a>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout top content end-->
        @endif

        <div class="row">
            <!-- checkout center content start -->
            <div class="col-md-12">
                <div class="checkout-header cta">
                    <h4><i class="fa fa-users"></i>Have a coupon? <a href="login.html">Click here to enter your code</a>
                    </h4>
                </div>
                <div class="checkout-coupon">
                    <form action="#">
                        <input type="text" placeholder="Coupon Code">
                        <input type="submit" value="Apply Coupon">
                    </form>
                </div>
            </div>
        </div>
        <!-- checkout center content end -->
        <div class="row">
            <div class="col-md-7">
                <!-- checkout bills info start -->
                <div class="billing-details">
                    <h3>Billing Details</h3>
                    <form action="contact.php">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="item3">First Name *</label>
                                <input type="text" name="firs-name" id="item3">
                            </div>
                            <div class="col-md-6">
                                <label for="item4">Last Name *</label>
                                <input type="text" name="last-name" id="item4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="item5">Compnay Name*</label>
                                <input type="text" name="name" id="item5">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="item6">Email Address *</label>
                                <input type="text" name="email" id="item6">
                            </div>
                            <div class="col-md-6">
                                <label for="item11">Phone *</label>
                                <input type="text" name="phone" id="item11">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="select">Country*</label>
                                <span class="select-country">
                                    <select name="select" id="select">
                                        <option value="">Usa</option>
                                        <option value="">Canada</option>
                                        <option value="">Uk</option>
                                        <option value="">Ireland</option>
                                    </select>
                                </span>
                                <label for="item7">Address*</label>
                                <input type="text" placeholder="Street Address" id="item7">
                                <input type="text" placeholder="Apartment,Suite (Optional)">
                                <label for="item8">Town / City *</label>
                                <input type="text" name="city" id="item8">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="select2">State *</label>
                                <span class="select-country">
                                    <select name="select" id="select2">
                                        <option value="">Alaska</option>
                                        <option value="">New Yeark</option>
                                        <option value="">Uk</option>
                                        <option value="">Ireland</option>
                                    </select>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label for="item9">Zip Code *</label>
                                <input type="text" name="zip" id="item9">
                            </div>
                            <div class="col-md-12">
                                <span class="check_box33">
                                    <input type="checkbox" id="dsds" name="cf">
                                    <label for="dsds">Create an acoount ?</label>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="textfield-area">
                                    <h3>Additional Information</h3>
                                    <p>Order Notes</p>
                                    <textarea placeholder="Notes about your order.."></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- checkout bills info end -->
            <div class="col-lg-4 offset-lg-1 col-md-5">
                <!-- checkout bills info right side start -->
                <div class="checkout-right">
                    <h3>Your order</h3>
                    <ul>
                        <li>Product <span>Total</span></li>
                        <li>Nullam malesuada × 1 <span>Total</span></li>
                        <li class="border-cta">Product <span>$50.00</span></li>
                        <li>Subtotal <span>$50.00</span></li>
                        <li>Total <span>$50.00</span></li>
                    </ul>
                    <div class="check-payment">
                        <span class="check_box453">
                            <input type="radio" id="45" name="df">
                            <label for="45">Check Payments </label>
                            Please send a check to Store Name, Store Street,
                            Store Town, Store State / County.
                        </span>
                        <span class="check_box453">
                            <input type="radio" id="65" name="radio">
                            <label for="65">Paypal </label>
                            Pay via PayPal; you can pay with your credit card
                            if you don’t have a PayPal account.
                        </span>
                    </div>
                    <div class="payment-cart">
                        <a href="{{url('payWithPaypal')}}">
                            <img src="source/img/payment-cart.png" alt="">
                        </a>

                        @if (Session::has('success'))
                        <p>{{Session::get('success')}}</p>
                        @endif
                        <br>
                        <a class="order-btn" href="#">Place Order</a>
                    </div>
                </div>
            </div>
            <!-- checkout bills info right side end -->
        </div>
    </div>
</div>
<!-- Checkout top area end-->
@endsection