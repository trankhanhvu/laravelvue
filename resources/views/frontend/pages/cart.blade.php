@extends('frontend.layout.index')

@section('breadcrum')
<!-- broadcamp area start-->
<div class="broadcamp-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Cart Page</h2>
                <h4><a href="{{url('index')}}">Home </a> / Cart</h4>
            </div>
        </div>
    </div>
</div>
<!-- broadcamp area end-->
@endsection

@section('content')
<!-- Cart page start -->
<div class="cart-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-page-content">
                    <table class="cart-products">
                        <tr class="cart-menu">
                            <th class="cart-products-cross responsive-display product-cart">Remove</th>
                            <th class="cart-products-image responsive-display product-cart">Product</th>
                            <th class="cart-product-margin"></th>
                            <th class="cart-products-product product-cart"></th>
                            <th class="cart-products-price product-cart">Name</th>
                            <th class="cart-products-price product-cart">Price</th>
                            <th class="cart-products-quantiry product-cart">Quantity</th>
                            <th class="cart-products-total product-cart">Total</th>
                        </tr>

                        @foreach ($cart as $item)
                        <tr class="product-margin">
                            <input type="hidden" value="{{$item->id}}" class="product_id" />
                            <td class="cart-products-cross">
                                <a href="#" class="cart_update"><i class="fa fa-refresh"></i></a>
                                <a href="{{url('cart_remove',['id' => $item->id])}}" class="cart_remove"><i
                                        class="fa fa-close"></i></a>
                            </td>
                            <td class="cart-products-image">
                                <img src="{{asset('source/upload/' . $item->attributes->img)}}" alt="">
                            </td>
                            <td class="cart-product-text cta">
                            </td>
                            <td class="cart-product-text cta">
                            </td>
                            <td class="cart-product-text">
                                <h4>{{$item->name}}</h4>
                            </td>
                            <td class="cart-product-text">
                                <h4>{{number_format($item->price, 0, '', ',')}}</h4>
                            </td>
                            <td class="cart-product-text">
                                <h4><input class="qty" type="number" min="1" max="100" step="1"
                                        value="{{$item->quantity}}"></h4>
                            </td>
                            <td class="cart-product-text">
                                <h4>{{number_format($item->quantity*$item->price, 0, '', ',')}}</h4>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 offset-lg-8">
                <div class="cart-submit-area">
                    <a href="#" class="checkout">Proceed to Checkout</a>
                    <ul>
                        <li>Subtotal : <span>{{number_format($subTotal, 0, '', ',')}}</span></li>
                        <li>Shipping Charge :<span>Free</span></li>
                        <li>Total Cost :<span>{{number_format($subTotal, 0, '', ',')}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart page end -->
@endsection

@section('css')
<style>
    .cart-products-image {
        width: 100px;
        height: 100px;
    }

    .cart-products-image img {
        object-fit: cover;
    }
</style>
@endsection

@section('script')
<script type="text/javascript">
    $('.cart_update').click(function() {
        var id = $(this).closest('.product-margin').find('.product_id').val();
        var quantity = $(this).closest('.product-margin').find('.qty').val();

        $.ajax({
            type: 'GET',
            url: '/cart_update',
            data: { "id": id, "quantity": quantity },
            success: function(data) {
                location.href = 'cart';
            }
        });
    });
</script>
@endsection