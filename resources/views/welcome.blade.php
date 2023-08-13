@extends('user.layout.index')
@section('content')
    <!-- Main Slider Start -->
    <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex ec-slide-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title" style="color: black;">Elevate Your Designs with Bullion Wires</h1>
                                    <!-- <h2 class="ec-slide-stitle">Sale Offer</h2> -->
                                    <p style="color: black;">Discover a world of exquisite craftsmanship as we offer a diverse range of gilded bullion wires, perfect for adding a touch of opulence to your creations.</p>
                                    <!-- <a href="#" class="btn btn-lg btn-dark">Order Now</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex ec-slide-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title" style="color: black;">Unleash Creativity with Bullion Wires</h1>
                                    <!-- <h2 class="ec-slide-stitle">Sale Offer</h2> -->
                                    <p style="color: black;">Explore our premium selection of bullion wires, each thread meticulously crafted to infuse your projects with unparalleled luxury and elegance.</p>
                                    <!-- <a href="#" class="btn btn-lg btn-dark">Order Now</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p" id="collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Our Top Collection</h2>
                        <h2 class="ec-title">Our Top Collection</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center">
                    <ul class="ec-pro-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-pro-for-all"> Latest Arrivals
                                </a></li>
                        <!-- <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-men">For
                                Men</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-women">For
                                Women</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-child">For
                                Children</a></li> -->
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-for-all">
                            <div class="row">
                                <!-- Product Content -->
                                @foreach ($data as $data)


                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content"
                                    data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image" style="object-fit: contain;height: 295px">
                                                @foreach ($data->images as $image)
                                                    <a href="" class="image">
                                                        <img class="main-image" src="{{ asset('storage/products/' . $image->filename) }}"
                                                            alt="Product" />
                                                        <img class="hover-image" src="{{ asset('storage/products/' . $image->filename) }}"
                                                            alt="Product" />
                                                    </a>
                                                @endforeach
                                                {{-- <span class="percentage">20%</span> --}}
                                                <a class="quickview"
                                                   data-id="{{ $data->id }}"><i class="fi-rr-eye"></i></a>
                                                {{-- <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i
                                                            class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ route('product.detail', ['id' => $data->id]) }}">{{ $data->product_name }}
                                                </a></h5>
                                            <!-- <div class="ec-pro-rating">
                                                <p>
                                                    Check Bullion Wire / French Wire / Metallic Wire / Coiled Spiral Wire For Hand Embroidery Check Bullion wire also known as French wire or gimp wire is a tiny wire coil that is cut to length and threaded over the thread to protect it from abrasion on metal findings. Proponents maintain that French wire gives jewellery an elegant, professionally finished look while also protecting and strengthening the ends of the beadwork. Bullion wire is also widely used for Hand embroidery, under the tradition
                                                </p>
                                            </div> -->
                                            <span class="ec-price">
                                                <span class="new-price">PKR {{ $data->price }}</span>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- ec 4th Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->


    <!--  services Section Start -->
    <section class="section ec-services-section section-space-p" id="services">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-truck-moving"></i>
                        </div>
                        <div class="ec-service-desc">
                        <h2>Best Quality</h2>
                            <p>For all over the world</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-hand-holding-seeding"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>24X7 Support</h2>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-badge-percent"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>30 Days Return</h2>
                            <p>Simply return it within 30 days for an exchange</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-donate"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>Payment Secure</h2>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- Modal -->
        <div class="modal fade ec_quickview_modal"  tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <!-- Swiper -->
                                <div class="qty-product-cover">
                                    <div class="qty-slide">
                                        <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                                    </div>

                                </div>
                                <div class="qty-nav-thumb">
                                    <div class="qty-slide">
                                        <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="quickview-pro-content">
                                        <h5 class="ec-quick-title"></h5>
                                    {{-- <div class="ec-quickview-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div> --}}

                                    <div class="ec-quickview-desc"></div>
                                    <div class="ec-quickview-price">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="ec-quickview-qty">
                                        <div class="qty-plus-minus">
                                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                        </div>
                                        <div class="ec-quickview-cart ">
                                            <button class="btn btn-primary"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->

    <script>
        $(document).ready(function(){
            $('.quickview').click(function(e){
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    url: "/poduct-model-detail", // Update the URL to include the category ID
                    type: "POST",
                    data: { _token: '{{ csrf_token() }}' , id: id },
                    success: function(data)
                    {
                        $('.ec-quick-title').text(data.detail.product_name);
                        $('.ec-quickview-desc').text(data.detail.description);
                        $('.new-price').text('PKR ' + data.detail.price);
                        var productImages = data.productImage;
                        var mainImageContainer = $('.qty-product-cover');
                        var thumbnailContainer = $('.qty-nav-thumb');
                        mainImageContainer.empty();
                        thumbnailContainer.empty();
                        for (var i = 0; i < productImages.length; i++) {
                            var imageUrl = 'public/storage/products/' + productImages[i];
                            var mainImageHtml = '<div class="qty-slide"><img class="img-responsive" src="' + imageUrl + '" alt=""></div>';
                            // var thumbnailHtml = '<div class="qty-slide"><img class="img-responsive" height="100px" src="' + imageUrl + '" alt=""></div>';

                            // Append HTML to the respective containers
                            mainImageContainer.append(mainImageHtml);
                            // thumbnailContainer.append(thumbnailHtml);
                        }
                        $('.ec_quickview_modal').modal('show');
                        console.log(data);
                    },
                });
            });
        });
    </script>
@endsection
