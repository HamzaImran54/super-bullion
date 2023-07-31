@extends('auth.dashboard.layouts.app')
@section('content')
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between" style="width: 95%">
            <div>
                <h1>Product Detail</h1>
                <p class="breadcrumbs"><span><a href="{{route('dashboard')}}">Home</a></span>
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
                                                @foreach ($data['productImage'] as $image )
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive"
                                                        src="{{ asset('storage/products/'.$image)}}" alt="">
                                                      </div>
                                                @endforeach
                                            </div>
                                            <div class="single-nav-thumb">
                                                @foreach ($data['productImage'] as $image )
                                                <div class="single-slide">
                                                    <img class="img-responsive"
                                                    src="{{ asset('storage/products/'.$image)}}" alt="">
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6">
                                <div class="row product-overview">
                                    <div class="col-12">
                                        <h5 class="product-title">{{$data['detail']['product_name']}}</h5>
                                       <div class="mt-3">
                                        <p class="product-desc">{{$data['detail']['description']}}</p>
                                        <p class="product-price">Price: {{$data['detail']['price']}}</p>
                                        <ul class="product-color">
                                            <li class="color"><span
                                                    style="background-color:{{$data['detail']['color']}};"></span></li>
                                        </ul>
                                       </div>
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


