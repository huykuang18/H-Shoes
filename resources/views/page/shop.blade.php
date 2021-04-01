@extends('master')
@section('title','Cửa hàng')
@section('content')

<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item active">Cửa hàng</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product List Start -->
<div class="product-view">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-view-top">
                            <div class="row">
                                <div class="col-md-4">
                                    <form method="get" action="{{url('shop/keyword/key')}}" class="product-search">
                                        <input type="text" name="keyword" placeholder="Tìm kiếm">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <div class="product-short">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle" data-toggle="dropdown">Sắp xếp theo</div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">Mới nhất</a>
                                                <a href="#" class="dropdown-item">Giảm giá nhiều</a>
                                                <a href="#" class="dropdown-item">Bán chạy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product-price-range">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle" data-toggle="dropdown">Khoảng giá sản phẩm</div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">$0 to $50</a>
                                                <a href="#" class="dropdown-item">$51 to $100</a>
                                                <a href="#" class="dropdown-item">$101 to $150</a>
                                                <a href="#" class="dropdown-item">$151 to $200</a>
                                                <a href="#" class="dropdown-item">$201 to $250</a>
                                                <a href="#" class="dropdown-item">$251 to $300</a>
                                                <a href="#" class="dropdown-item">$301 to $350</a>
                                                <a href="#" class="dropdown-item">$351 to $400</a>
                                                <a href="#" class="dropdown-item">$401 to $450</a>
                                                <a href="#" class="dropdown-item">$451 to $500</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(count($products)==0)
                    <p>Không có sản phẩm nào</p>
                    @else
                    @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="{{asset('product-'.$product->id)}}">{{$product->name}}</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="source/img/products/{{$product->image_link}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="{{asset('cart/add/'.$product->id)}}"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="{{asset('product-'.$product->id)}}"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3>{{number_format($product->price)}}&nbsp;<span>vnđ</span></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>

                <!-- Pagination Start -->
                {{$products->links()}}
                <!-- Pagination Start -->
            </div>
            @include('category')
        </div>
    </div>
</div>
<!-- Product List End -->

<!-- Brand Start -->
<div class="brand">
    <div class="container-fluid">
        <div class="brand-slider">
            <div class="brand-item"><img src="source/img/brands/brand-1.jpg" alt=""></div>
            <div class="brand-item"><img src="source/img/brands/brand-2.jpg" alt=""></div>
            <div class="brand-item"><img src="source/img/brands/brand-3.jpg" alt=""></div>
            <div class="brand-item"><img src="source/img/brands/brand-4.jpg" alt=""></div>
            <div class="brand-item"><img src="source/img/brands/brand-5.jpg" alt=""></div>
        </div>
    </div>
</div>
<!-- Brand End -->

@endsection