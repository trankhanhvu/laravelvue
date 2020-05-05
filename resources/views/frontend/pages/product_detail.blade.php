@extends('frontend.layout.index')

@section('breadcrum')
<!-- broadcamp area start-->
<div class="broadcamp-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Product Page</h2>
                <h4><a href="{{url('index')}}">Home </a> / Product / Product Detail</h4>
            </div>
        </div>
    </div>
</div>
<!-- broadcamp area end-->
@endsection

@section('content')
<!-- Single shop start -->
<div class="single-shop-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5 wow fadeInRight">
                <div class="single-shop-left">
                    <div class="single-shop-slide">
                        @foreach ($listImage as $image)
                        <div class="shop-single-slide">
                            <img src="{{asset('source/upload/' . $image)}}" alt="">
                        </div>
                        @endforeach
                    </div>
                    <div class="single-shop-description">
                        <h4>Description</h4>
                        <p>Behaviour we improving at something to. Evil true high lady roof men had open. To projection
                            considered it precaution an melancholy or. Wo und young you thing worse along being ham.
                            Dissimilar of favourable solicitude if sympathize middletons at. </p>
                        <p>Cordially convinced did incommode existence put out suffering certai nly. Besides another and
                            saw ferrars limited ten say unknown. On at tolerably depending do perceived. Luckily eat joy
                            see own shyness minuter. So before remark at depart.</p>
                        <div class="single-shop-additional">
                            <h4>Addtional Information</h4>
                            <p>Color : <span>Black, Blue, Green, Orange, Pink, White</span></p>
                            <p>Size : <span>L, M, S, XL, XXL</span></p>
                            <p>Dimensions : <span>90 x 60 x 60 cm</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 offset-md-1 wow fadeInLeft">
                <div class="single-shop-right">
                    <h3>{{$productItem->name}}</h3>

                    <h4 class="category-cta">Category : <span>{{$productItem->category->name}}</span></h4>
                    <h4 class="category-cta">Price : <span>{{number_format($productItem->price, 0, '', ',')}}</span></h4>

                    <div class="filter-color">
                        <h4>Color Choice</h4>
                        <div class="filter-content">
                            <span>
                                <input type="checkbox" id="c1" name="cb">
                                <label for="c1"></label>
                            </span>
                            <span class="check_2">
                                <input type="checkbox" id="c2" name="cb">
                                <label for="c2"></label>
                            </span>
                            <span class="check_3">
                                <input type="checkbox" id="c3" name="cb">
                                <label for="c3"></label>
                            </span>
                            <span class="check_4">
                                <input type="checkbox" id="c4" name="cb">
                                <label for="c4"></label>
                            </span>
                            <span class="check_5">
                                <input type="checkbox" id="c5" name="cb">
                                <label for="c5"></label>
                            </span>
                        </div>
                    </div>
                    <div class="single-shop-quantity">
                        <div class="quantity">
                            <input type="number" min="1" max="100" step="1" value="1" class="qty">
                        </div>
                        <input type="hidden" value="{{$productItem->id}}" class="product_id">
                        <a href="{{url('cart_add',['id' => $productItem->id,'quantity' => 1])}}" class="addcart">Add To
                            Cart</a>
                        <a href="#" class="addcart cta"><i class="fa fa-heart-o"></i></a>
                    </div>
                    <div class="single-shop-review">
                        <h4>Reviews (5)</h4>
                        <div class="review-box">
                            <h5>David Alexander
                                <span class="rating">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </span>
                            </h5>
                            <span class="date-cta">20 Feb , 2018</span>
                            <p>Dispatched entreaties boisterous say why stimulated. Certain forbade pic ture now prevent
                                carried she get see sitting.Dispatched entreaties boistc ture now prevent carried</p>
                        </div>
                        <div class="review-box">
                            <h5>Beverly Toro
                                <span class="rating">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </span>
                            </h5>
                            <span class="date-cta">22 Feb , 2018</span>
                            <p>Dispatched entreaties boisterous say why stimulated. Certain forbade pic ture now prevent
                                carried she get see sitting.Dispatched entreaties boistc ture now prevent carried</p>
                        </div>
                    </div>
                    <div class="your-rating">
                        <h4>Your Rating</h4>
                        <span class="feedback-cta"><i class="fa fa-star-o"></i></span>
                        <span class="feedback-cta"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
                        <span class="feedback-cta"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                class="fa fa-star-o"></i></span>
                        <span class="feedback-cta"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
                        <span class="feedback-cta"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
                    </div>
                    <div class="rating-form">
                        <form action="contact.php">
                            <input type="text" placeholder="Your Name">
                            <input type="email" placeholder="Your Email">
                            <textarea placeholder="Your Reviews"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single shop end -->
@endsection

@section('script')
<script type="text/javascript">
    $('.qty').change(function(){
        $('.addcart').attr('href',location.origin + "/cart_add/" + $('.product_id').val() + "/" + $(this).val());
    });

    $('.addcart').click(function(event){
        event.preventDefault();
        var id = $('.product_id').val()
        var quantity = $('.qty').val();
        
        $.ajax({
            type: 'GET',
            url: '/check_quantity_card',
            data: { "id": id, "quantity": quantity, "type" : "normal" },
            success: function(data) {
                var available = parseInt(data);
                if(data >= 0)
                    location.href = $('.addcart').attr('href');
            }
        });

    });
</script>
@endsection