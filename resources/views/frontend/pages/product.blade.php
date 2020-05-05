@extends('frontend.layout.index')

@section('breadcrum')
<!-- broadcamp area start-->
<div class="broadcamp-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Product Page</h2>
                <h4><a href="{{url('index')}}">Home </a> / Product</h4>
            </div>
        </div>
    </div>
</div>
<!-- broadcamp area end-->
@endsection

@section('content')
<div class="shop-v2-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 wow fadeInRight">
                <div class="shop-v2-left">
                    <form action="#">
                        <span>
                            <input type="search" value="Search Products">
                            <i class="fa fa-search"></i>
                        </span>
                    </form>
                    <div class="ui-slider-area">
                        <h4>Filter By Price</h4>
                        <div id="slider-range"></div>
                        <p>
                            <label for="amount">PRICE:</label>
                            <input type="text" id="amount">
                            <a href="#"
                                class="filter-btn">Filter</a>
                        </p>
                    </div>
                    <div class="shop-category">
                        <h4>Shop Categories</h4>
                        <ul>
                            @foreach ($categoryList as $category)
                            <li><a
                                    href="{{ Request::fullUrlWithQuery(['category' => $category->id]) }}">{{$category->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="filter-color">
                        <h4>Fillter By Color</h4>
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
                    <div class="shop-tag">
                        <h4>Product Tag</h4>
                        <a href="#">Women</a>
                        <a href="#">T-shirts</a>
                        <a href="#">Dresses</a>
                        <a href="#">Men</a>
                        <a href="#">Shoes</a>
                        <a href="#">Men</a>
                        <a href="#">Dresses</a>
                        <a href="#">Women</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 wow fadeInLeft">
                <div class="shop-page-right">
                    <div class="row">
                        @foreach ($productList as $product)
                        <div class="col-md-4">
                            <div class="product-single-carousell ctas text-center">
                                <div class="product-carousell-img">
                                    <img src="{{asset('source/upload/' . $product->primary_image)}}" alt="">
                                    <div class="product-carousell-social">
                                        <a href="{{asset('source/upload/' . $product->primary_image)}}"
                                            class="search-plus mfp-with-zoom">
                                            <span><i class="fa fa-search-plus"></i></span>
                                        </a>
                                        <span><i class="fa fa-heart"></i></span>
                                    <span><a href="{{url('product_detail?id=' . $product->id)}}"><i class="fa fa-shopping-bag"></i></a></span>
                                    </div>
                                    <span class="top-hot">New</span>
                                </div>
                                <div class="product-carousel-text">
                                    <h4>{{$product->name}}</h4>
                                    <h5>{{$product->price}} VND</h5>
                                    <a href="#" class="shop-btn">Add To Cart <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="shop-pagination">
                                <ul class="pagination">
                                    {!! $productList->appends(request()->input())->links() !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection