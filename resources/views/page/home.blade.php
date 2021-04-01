@extends('master')
@section('title','Trang chủ')
@section('content')
<!-- Main Slider Start -->
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <nav class="navbar bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-home"></i>Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fa fa-shopping-bag"></i>Bán chạy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fa fa-bolt"></i>Đang giảm giá</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('shop/catalog/4')}}"><i class="fa fa-female"></i>Giày nữ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('shop/catalog/5')}}"><i class="fa fa-male"></i>Giày nam</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('shop/catalog/6')}}"><i class="fa fa-child"></i>Giày trẻ em</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6">
                <div class="header-slider normal-slider">
                    <div class="header-slider-item">
                        <img src="source/img/slider-1.jpg" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>Some text goes here that describes the image</p>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                        </div>
                    </div>
                    <div class="header-slider-item">
                        <img src="source/img/slider-2.jpg" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>Some text goes here that describes the image</p>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                        </div>
                    </div>
                    <div class="header-slider-item">
                        <img src="source/img/slider-3.jpg" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>Some text goes here that describes the image</p>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="header-img">
                    <div class="img-item">
                        <img src="source/img/category-1.jpg" />
                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                    <div class="img-item">
                        <img src="source/img/category-2.jpg" />
                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Slider End -->

<!-- Feature Start-->
<div class="feature">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fab fa-cc-mastercard"></i>
                    <h2>Thanh toán an toàn</h2>
                    <p>
                        Các hình thức đa dạng
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fa fa-truck"></i>
                    <h2>Giao hàng toàn quốc</h2>
                    <p>
                        Vận chuyển khắp Việt Nam
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fa fa-sync-alt"></i>
                    <h2>Đổi trả dễ dàng</h2>
                    <p>
                        Đổi hàng thoải mái trong 30 ngày
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fa fa-comments"></i>
                    <h2>Bảo hành dài hạn</h2>
                    <p>
                        Bảo hành lên đến 60 ngày
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->

<!-- Featured Product Start -->
<div class="featured-product product">
    <div class="container-fluid">
        <div class="section-header">
            <h1>Sản phẩm bán chạy</h1>
        </div>
        <div class="row align-items-center product-slider product-slider-4">
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#">Product Name</a>
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
                            <img src="source/img/s1.jpg" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span>99</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#">Product Name</a>
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
                            <img src="source/img/adidas-stan-smith-1.1.jpg" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span>99</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#">Product Name</a>
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
                            <img src="source/img/xsport-vans-caro-1.1.jpg" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span>99</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#">Product Name</a>
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
                            <img src="source/img/adidas-stan-smith-1.jpg" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span>99</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#">Product Name</a>
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
                            <img src="source/img/product-5.jpg" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span>99</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured Product End -->

<!-- Newsletter Start -->
<div class="newsletter">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1>Subscribe Our Newsletter</h1>
            </div>
            <div class="col-md-6">
                <div class="form">
                    <input type="email" value="Your email here">
                    <button>Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->

<!-- Recent Product Start -->
<div class="recent-product product">
    <div class="container-fluid">
        <div class="section-header">
            <h1>Sản phẩm ưu đãi</h1>
        </div>
        <div class="row align-items-center product-slider product-slider-4">
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#">Product Name</a>
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
                            <img src="source/img/product-6.jpg" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span>99</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#">Product Name</a>
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
                            <img src="source/img/product-7.jpg" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span>99</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#">Product Name</a>
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
                            <img src="source/img/product-8.jpg" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span>99</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#">Product Name</a>
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
                            <img src="source/img/product-9.jpg" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span>99</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#">Product Name</a>
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
                            <img src="source/img/product-10.jpg" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span>99</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recent Product End -->

<!-- Brand Start -->
<div class="brand">
    <div class="container-fluid">
        <div class="brand-slider">
            <div class="brand-item"><img src="source/img/brand-1.png" alt=""></div>
            <div class="brand-item"><img src="source/img/brand-2.png" alt=""></div>
            <div class="brand-item"><img src="source/img/brand-3.png" alt=""></div>
            <div class="brand-item"><img src="source/img/brand-4.png" alt=""></div>
            <div class="brand-item"><img src="source/img/brand-5.png" alt=""></div>
            <div class="brand-item"><img src="source/img/brand-6.png" alt=""></div>
        </div>
    </div>
</div>
<!-- Brand End -->

<!-- Category Start-->
<div class="category">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="category-item ch-400">
                    <img src="source/img/category-3.jpg" />
                    <a class="category-name" href="">
                        <p>Some text goes here that describes the image</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-item ch-250">
                    <img src="source/img/category-4.jpg" />
                    <a class="category-name" href="">
                        <p>Some text goes here that describes the image</p>
                    </a>
                </div>
                <div class="category-item ch-150">
                    <img src="source/img/category-5.jpg" />
                    <a class="category-name" href="">
                        <p>Some text goes here that describes the image</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-item ch-150">
                    <img src="source/img/category-6.jpg" />
                    <a class="category-name" href="">
                        <p>Some text goes here that describes the image</p>
                    </a>
                </div>
                <div class="category-item ch-250">
                    <img src="source/img/category-7.jpg" />
                    <a class="category-name" href="">
                        <p>Some text goes here that describes the image</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-item ch-400">
                    <img src="source/img/category-8.jpg" />
                    <a class="category-name" href="">
                        <p>Some text goes here that describes the image</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category End-->

<!-- Call to Action Start -->
<div class="call-to-action">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Liên hệ để được hỗ trợ</h1>
            </div>
            <div class="col-md-6">
                <a href="tel:0934366374">+84 394 366 374</a>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action End -->

@endsection