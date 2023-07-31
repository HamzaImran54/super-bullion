@extends('auth.dashboard.layouts.app')
@section('content')
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between" style="width: 95%">
            <div>
                <h1>Product Detail</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Product
                </p>
            </div>
            <div>
                <a href="product-list.html" class="btn btn-primary"> Edit
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="width: 95%">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Product Detail</h2>
                    </div>

                    <div class="card-body product-detail">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6">
                                <div class="row">
                                    <div class="single-pro-img">
                                        <div class="single-product-scroll">
                                            <div class="single-product-cover">
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive"
                                                        src="assets/img/products/pd_1.jpg" alt="">
                                                </div>
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive"
                                                        src="assets/img/products/pd_2.jpg" alt="">
                                                </div>
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive"
                                                        src="assets/img/products/pd_3.jpg" alt="">
                                                </div>
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive"
                                                        src="assets/img/products/pd_4.jpg" alt="">
                                                </div>
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive"
                                                        src="assets/img/products/pd_5.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="single-nav-thumb">
                                                <div class="single-slide">
                                                    <img class="img-responsive"
                                                        src="assets/img/products/pd_1.jpg" alt="">
                                                </div>
                                                <div class="single-slide">
                                                    <img class="img-responsive"
                                                        src="assets/img/products/pd_2.jpg" alt="">
                                                </div>
                                                <div class="single-slide">
                                                    <img class="img-responsive"
                                                        src="assets/img/products/pd_3.jpg" alt="">
                                                </div>
                                                <div class="single-slide">
                                                    <img class="img-responsive"
                                                        src="assets/img/products/pd_4.jpg" alt="">
                                                </div>
                                                <div class="single-slide">
                                                    <img class="img-responsive"
                                                        src="assets/img/products/pd_5.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6">
                                <div class="row product-overview">
                                    <div class="col-12">
                                        <h5 class="product-title">Pure Leather Purse for Woman</h5>
                                        <p class="product-rate">
                                            <i class="mdi mdi-star is-rated"></i>
                                            <i class="mdi mdi-star is-rated"></i>
                                            <i class="mdi mdi-star is-rated"></i>
                                            <i class="mdi mdi-star is-rated"></i>
                                            <i class="mdi mdi-star"></i>
                                        </p>
                                        <p class="product-desc">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1990.</p>
                                        <p class="product-desc">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1990. Lorem Ipsum
                                            is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <p class="product-price">Price: $120</p>
                                        <ul class="product-color">
                                            <li class="color"><span
                                                    style="background-color:#90cdf7;"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div>
@endsection


