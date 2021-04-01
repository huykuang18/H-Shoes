    <!-- Top bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <i class="fa fa-envelope"></i> huynq.rma@gmail.com
                </div>
                <div class="col-sm-6">
                    <i class="fa fa-phone-alt"></i> +84 394 366 374
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar End -->

    <!-- Nav Bar Start -->
    <div class="nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="/" class="nav-item nav-link active">Trang chủ</a>
                        <a href="{{asset('shop')}}" class="nav-item nav-link">Cửa hàng</a>
                        <a href="product-detail.html" class="nav-item nav-link">Tin tức</a>
                        <a href="cart.html" class="nav-item nav-link">Liên hệ</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Thương hiệu</a>
                            <div class="dropdown-menu">
                            @foreach($brands as $brand)
                                <a href="{{asset('shop/catalog/'.$brand->id)}}" class="dropdown-item">{{$brand->name}}</a>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <a href="#" class="nav-item nav-link">Kiểm tra tích điểm</a>
                        <a href="#" class="nav-item nav-link">Kiểm tra đơn hàng</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="/">
                            <img src="source/img/logo.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <form class="search" method="get" action="{{url('shop/keyword/key')}}">
                        <input type="text" name="keyword" placeholder="Tìm kiếm">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="user">
                        <a href="wishlist.html" class="btn wishlist">
                            <i class="fa fa-heart"></i>
                            <span>(0)</span>
                        </a>
                        <a href="{{asset('cart')}}" class="btn cart">
                            <i class="fa fa-shopping-cart"></i>
                            <span>(0)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Bar End -->