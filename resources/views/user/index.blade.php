@extends('layouts.user.main')

@section('title', 'Главная')


@section('custom_css')

@endsection


@section('custom_js')

@endsection


@section('content')

    <!--slider area start-->
    <section class="slider_section mb-140">
        <div class="slider_area slick_slider_activation" data-slick='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "arrows": false,
            "dots": true,
            "autoplay": false,
            "speed": 300,
            "infinite": true
        }'>
            <div class="single_slider d-flex align-items-center"  data-bgimg="user/assets/img/slider/home_01_slider_01.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="single_slider_inner">
                                <div class="slider_text">
                                    <h3>We are <span>Reliant</span></h3>
                                    <h1>Modern, Creative & Luxury homes for everyone</h1>
                                    <h3>For Buy, Sell & Rent Properties</h3>
                                    <a href="#">Read more</a>
                                </div>
                                <div class="slider_caption_img">
                                    <div class="slider_caption_img_list">
                                        <img src="user/assets/img/slider/slider-layer1.png" alt="">
                                    </div>
                                    <div class="slider_caption_img_list">
                                        <img src="user/assets/img/slider/slider-layer2.png" alt="">
                                    </div>
                                    <div class="slider_caption_img_list">
                                        <img src="user/assets/img/slider/slider-layer3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="user/assets/img/slider/home_01_slider_02.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="single_slider_inner">
                                <div class="slider_text">
                                    <h3>We are <span>Reliant</span></h3>
                                    <h1>Modern, Creative & Luxury homes for everyone</h1>
                                    <h3>For Buy, Sell & Rent Properties</h3>
                                    <a href="#">Read more</a>
                                </div>
                                <div class="slider_caption_img">
                                    <div class="slider_caption_img_list">
                                        <img src="user/assets/img/slider/slider-layer1.png" alt="">
                                    </div>
                                    <div class="slider_caption_img_list">
                                        <img src="user/assets/img/slider/slider-layer2.png" alt="">
                                    </div>
                                    <div class="slider_caption_img_list">
                                        <img src="user/assets/img/slider/slider-layer3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="user/assets/img/slider/home_01_slider_03.png">

                <div class="container">

                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="single_slider_inner">
                                <div class="slider_text">
                                    <h3>We are <span>Reliant</span></h3>
                                    <h1>Modern, Creative & Luxury homes for everyone</h1>
                                    <h3>For Buy, Sell & Rent Properties</h3>
                                    <a href="#">Read more</a>
                                </div>
                                <div class="slider_caption_img">
                                    <div class="slider_caption_img_list">
                                        <img src="user/assets/img/slider/slider-layer1.png" alt="">
                                    </div>
                                    <div class="slider_caption_img_list">
                                        <img src="user/assets/img/slider/slider-layer2.png" alt="">
                                    </div>
                                    <div class="slider_caption_img_list">
                                        <img src="user/assets/img/slider/slider-layer3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!--fined house start-->
    <div class="find_house_area find_house_margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="find_house_container">
                        <div class="find_house_inner">
                            <div class="find_house_text">
                                <h2>Easy to find your
                                    house without any
                                    difficulties</h2>
                            </div>
                            <div class="find_house_form">
                                <form action="#">
                                    <div class="find_house_form_list">
                                        <div class="single_house_form">
                                            <select class="select_option">
                                                <option>Location</option>
                                                <option>Australia</option>
                                                <option>South Carolina</option>
                                                <option>Rhode Island</option>
                                            </select>
                                        </div>
                                        <div class="single_house_form">
                                            <select class="select_option">
                                                <option>Property Type</option>
                                                <option>Property Type 2</option>
                                                <option>Property Type 3</option>
                                                <option>PropertyType 4</option>
                                            </select>
                                        </div>
                                        <div class="single_house_form">
                                            <select class="select_option">
                                                <option>Buy/Sale/Rent</option>
                                                <option>Buy/Sale2</option>
                                                <option>Buy/Sale3</option>
                                                <option>Buy/Sale4</option>
                                            </select>
                                        </div>
                                        <div class="single_house_form">
                                            <select class="select_option">
                                                <option>Areas(sqft)</option>
                                                <option>Areas(sqft)2</option>
                                                <option>Areas(sqft)3</option>
                                                <option>Areas(sqft)4</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="find_house_form_list">
                                        <div class="single_house_form">
                                            <select class="select_option">
                                                <option>Beedrooms</option>
                                                <option>Beedrooms2</option>
                                                <option>Beedrooms3</option>
                                                <option>Beedrooms4</option>
                                            </select>
                                        </div>
                                        <div class="single_house_form">
                                            <select class="select_option">
                                                <option>Bathrooms</option>
                                                <option>Bathrooms2</option>
                                                <option>Bathrooms3</option>
                                                <option>Bathrooms4</option>
                                            </select>
                                        </div>
                                        <div class="single_house_form house_form_price">
                                            <select class="select_option">
                                                <option>Price Range</option>
                                                <option>0 -> $2000</option>
                                                <option>2000 -> $3000</option>
                                                <option>4000</option>
                                            </select>
                                        </div>
                                        <div class="form_search_btn">
                                            <a href="#">Search</a>
                                        </div>

                                    </div>
                                    <div class="advanced_search">
                                        <a href="javascript:void(0)">+ Advanced search</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="advanced_filter_option">
                            <div class="advanced_filter_inner">
                                <div class="advanced_filter_list">
                                    <div class="advanced_filter_check">
                                        <input id="checkid1" type="checkbox">
                                        <label for="checkid1">Property ID</label>
                                    </div>
                                    <div class="advanced_filter_check">
                                        <input id="checkid2" type="checkbox">
                                        <label for="checkid2">Garages</label>
                                    </div>
                                </div>
                                <div class="advanced_filter_list">
                                    <div class="advanced_filter_check">
                                        <input id="checkid3" type="checkbox">
                                        <label for="checkid3">Air Conditioning</label>
                                    </div>
                                    <div class="advanced_filter_check">
                                        <input id="checkid4" type="checkbox">
                                        <label for="checkid4">Emergengy Exit</label>
                                    </div>
                                </div>
                                <div class="advanced_filter_list">
                                    <div class="advanced_filter_check">
                                        <input id="checkid5" type="checkbox">
                                        <label for="checkid5">Swimming Pool</label>
                                    </div>
                                    <div class="advanced_filter_check">
                                        <input id="checkid6" type="checkbox">
                                        <label for="checkid6">Fire Alarm</label>
                                    </div>
                                </div>
                                <div class="advanced_filter_list">
                                    <div class="advanced_filter_check">
                                        <input id="checkid7" type="checkbox">
                                        <label for="checkid7">Keywords</label>
                                    </div>
                                    <div class="advanced_filter_check">
                                        <input id="checkid8" type="checkbox">
                                        <label for="checkid8">GYM</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fined  house end-->

    <!--properties area start-->
    <div class="properties_area properties_slide mb-122">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="section_titile">
                        <h2>Our Featured Properties</h2>
                        <p>Pleasure rationally encounter consequences are some of easy
                            way to find extremely painful. Nor again is there anyone</p>
                    </div>
                </div>
            </div>

            <div class="properties_container swiper-container">
                <div class=" swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="single_properties wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="properties_thumb">
                                <a href="properties-details.html"><img src="user/assets/img/properties/properties1.png" alt=""></a>
                                <div class="product_label">
                                    <span class="sale">For Sale</span>
                                </div>
                            </div>
                            <div class="properties_content">
                                <div class="properties_content_top">
                                    <h3><a href="properties-details.html">Olvia de Paradise</a></h3>
                                    <span class="properties_price">$256600</span>
                                </div>
                                <div class="properties_location">
                                    <p>245 West City, Central Town, New York</p>
                                    <p>5 Bed - 3 Bath - 1 Garage</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single_properties wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="properties_thumb">
                                <a href="properties-details.html"><img src="user/assets/img/properties/properties2.png" alt=""></a>
                                <div class="product_label">
                                    <span class="rent">For Rent</span>
                                </div>
                            </div>
                            <div class="properties_content">
                                <div class="properties_content_top">
                                    <h3><a href="properties-details.html">Galaxy de Villa</a></h3>
                                    <span class="properties_price">$780/m</span>
                                </div>
                                <div class="properties_location">
                                    <p>245 West City, Central Town, New York</p>
                                    <p>5 Bed - 3 Bath - 1 Garage</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single_properties wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <div class="properties_thumb">
                                <a href="properties-details.html"><img src="user/assets/img/properties/properties3.png" alt=""></a>
                                <div class="product_label">
                                    <span class="sale">For Sale</span>
                                </div>
                            </div>
                            <div class="properties_content">
                                <div class="properties_content_top">
                                    <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                    <span class="properties_price">$352000</span>
                                </div>
                                <div class="properties_location">
                                    <p>245 West City, Central Town, New York</p>
                                    <p>5 Bed - 3 Bath - 1 Garage</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single_properties wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.3s">
                            <div class="properties_thumb">
                                <a href="properties-details.html"><img src="user/assets/img/properties/properties1.png" alt=""></a>
                                <div class="product_label">
                                    <span class="sale">For Sale</span>
                                </div>
                            </div>
                            <div class="properties_content">
                                <div class="properties_content_top">
                                    <h3><a href="properties-details.html">Olvia de Paradise</a></h3>
                                    <span class="properties_price">$256600</span>
                                </div>
                                <div class="properties_location">
                                    <p>245 West City, Central Town, New York</p>
                                    <p>5 Bed - 3 Bath - 1 Garage</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single_properties wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.3">
                            <div class="properties_thumb">
                                <a href="properties-details.html"><img src="user/assets/img/properties/properties2.png" alt=""></a>
                                <div class="product_label">
                                    <span class="rent">For Rent</span>
                                </div>
                            </div>
                            <div class="properties_content">
                                <div class="properties_content_top">
                                    <h3><a href="properties-details.html">Galaxy de Villa</a></h3>
                                    <span class="properties_price">$780/m</span>
                                </div>
                                <div class="properties_location">
                                    <p>245 West City, Central Town, New York</p>
                                    <p>5 Bed - 3 Bath - 1 Garage</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single_properties wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.3s">
                            <div class="properties_thumb">
                                <a href="properties-details.html"><img src="user/assets/img/properties/properties3.png" alt=""></a>
                                <div class="product_label">
                                    <span class="sale">For Sale</span>
                                </div>
                            </div>
                            <div class="properties_content">
                                <div class="properties_content_top">
                                    <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                    <span class="properties_price">$352000</span>
                                </div>
                                <div class="properties_location">
                                    <p>245 West City, Central Town, New York</p>
                                    <p>5 Bed - 3 Bath - 1 Garage</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!--properties area end-->

    <!--services area start-->
    <div class="services_area mb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section_titile">
                        <h2>Our services</h2>
                        <p>Pleasure rationally encounter consequences are some of easy
                            way to find extremely painful. Nor again is there anyone</p>
                    </div>
                </div>
            </div>
            <div class="services_container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="services_left wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="services_list">
                                <div class="services_small_thumb">
                                    <img src="user/assets/img/services/services-s1.png" alt="">
                                </div>
                                <div class="services_text">
                                    <h3><a href="single-services.html">Sale Property</a></h3>
                                    <p>pleasure rationally encounter are
                                        extremely painful. Nor again is there
                                        anyone who loves or pursues</p>
                                </div>
                            </div>
                            <div class="services_list">
                                <div class="services_small_thumb">
                                    <img src="user/assets/img/services/services-s2.png" alt="">
                                </div>
                                <div class="services_text">
                                    <h3><a href="single-services.html">Buy Property</a></h3>
                                    <p>pleasure rationally encounter are
                                        extremely painful. Nor again is there
                                        anyone who loves or pursues</p>
                                </div>
                            </div>
                            <div class="services_list">
                                <div class="services_small_thumb">
                                    <img src="user/assets/img/services/services-s3.png" alt="">
                                </div>
                                <div class="services_text">
                                    <h3><a href="single-services.html">Rent Property</a></h3>
                                    <p>pleasure rationally encounter are
                                        extremely painful. Nor again is there
                                        anyone who loves or pursues</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="services_section_thumb">
                            <div class="services_single_thumb one wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1">
                                <img src="user/assets/img/services/services-thumb3.png" alt="">
                            </div>
                            <div class="services_single_thumb two wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s">
                                <img src="user/assets/img/services/services-thumb2.png" alt="">
                            </div>
                            <div class="services_single_thumb three wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1s">
                                <img src="user/assets/img/services/services-thumb1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--services area end-->

    <!--properties area start-->
    <div class="properties_area mb-100">
        <div class="container">
            <div class="section_header">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="section_titile">
                            <h2>Newly Added Properties</h2>
                            <p>Pleasure rationally encounter consequences are some of easy
                                way to find extremely painful. Nor again is there anyone</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="properties_filter_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#allproperty" role="tab" aria-controls="allproperty" aria-selected="true">
                                        All Property
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#forbuy" role="tab" aria-controls="forbuy" aria-selected="false">
                                        For Buy
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#forsale" role="tab" aria-controls="forsale" aria-selected="false">
                                        For Sale
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#forrent" role="tab" aria-controls="forrent" aria-selected="false">
                                        For Rent
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="properties_container properties_tab">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="allproperty" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.1s">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties4.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="rent">For Rent</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                            <span class="properties_price">$352000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.2s">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties5.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Galaxy de Villa</a></h3>
                                            <span class="properties_price">$780/m</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.3s">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties6.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                            <span class="properties_price">$352000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties wow fadeInUp" data-wow-delay="0.56" data-wow-duration="1.4s">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties7.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Olvia de Paradise</a></h3>
                                            <span class="properties_price">$950/m</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.4s">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties8.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="rent">For Rent</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Galaxy de Villa</a></h3>
                                            <span class="properties_price">$220000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.4s">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties9.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                            <span class="properties_price">$352000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="forbuy" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties5.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Galaxy de Villa</a></h3>
                                            <span class="properties_price">$780/m</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties6.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                            <span class="properties_price">$352000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties7.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Olvia de Paradise</a></h3>
                                            <span class="properties_price">$950/m</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties4.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="rent">For Rent</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                            <span class="properties_price">$352000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties8.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="rent">For Rent</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Galaxy de Villa</a></h3>
                                            <span class="properties_price">$220000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties9.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                            <span class="properties_price">$352000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="forsale" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties8.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="rent">For Rent</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Galaxy de Villa</a></h3>
                                            <span class="properties_price">$220000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties9.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                            <span class="properties_price">$352000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties4.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="rent">For Rent</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                            <span class="properties_price">$352000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties5.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Galaxy de Villa</a></h3>
                                            <span class="properties_price">$780/m</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties6.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                            <span class="properties_price">$352000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties7.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Olvia de Paradise</a></h3>
                                            <span class="properties_price">$950/m</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="forrent" role="tabpanel">
                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties7.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Olvia de Paradise</a></h3>
                                            <span class="properties_price">$950/m</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties8.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="rent">For Rent</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Galaxy de Villa</a></h3>
                                            <span class="properties_price">$220000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties9.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                            <span class="properties_price">$352000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties4.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="rent">For Rent</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                            <span class="properties_price">$352000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties5.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Galaxy de Villa</a></h3>
                                            <span class="properties_price">$780/m</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single_properties">
                                    <div class="properties_thumb">
                                        <a href="properties-details.html"><img src="user/assets/img/properties/properties6.png" alt=""></a>
                                        <div class="product_label">
                                            <span class="sale">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="properties_content">
                                        <div class="properties_content_top">
                                            <h3><a href="properties-details.html">Duplex Queen</a></h3>
                                            <span class="properties_price">$352000</span>
                                        </div>
                                        <div class="properties_location">
                                            <p>245 West City, Central Town, New York</p>
                                            <p>5 Bed - 3 Bath - 1 Garage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--properties area end-->

    <!--choose us area start-->
    <div class="choose_us_area mb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="choose_section_thumb wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1.7s">
                        <img src="user/assets/img/services/services-section2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="choose_us_sidebar wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1.7s">
                        <div class="section_titile">
                            <h2>Why Choose us</h2>
                            <p>Pleasure rationally encounter way to find painful
                                very easily from wide range of so you can buy
                                or sale your property...</p>
                        </div>
                        <div class="choose_us_gallery">
                            <div class="choose_list mb-50">
                                <div class="choose_small_thumb">
                                    <img src="user/assets/img/services/choose1.png" alt="">
                                </div>
                                <div class="choose_text">
                                    <h3>Budget Friendly</h3>
                                    <p>pleasure rationally encounter are
                                        anyone who loves or pursues</p>
                                </div>
                            </div>
                            <div class="choose_list mb-50">
                                <div class="choose_small_thumb">
                                    <img src="user/assets/img/services/choose2.png" alt="">
                                </div>
                                <div class="choose_text">
                                    <h3>Best Locations</h3>
                                    <p>pleasure rationally encounter are
                                        anyone who loves or pursues</p>
                                </div>
                            </div>
                            <div class="choose_list">
                                <div class="choose_small_thumb">
                                    <img src="user/assets/img/services/choose3.png" alt="">
                                </div>
                                <div class="choose_text">
                                    <h3>Trusted by Thousands</h3>
                                    <p>pleasure rationally encounter are
                                        anyone who loves or pursues</p>
                                </div>
                            </div>
                            <div class="choose_list">
                                <div class="choose_small_thumb">
                                    <img src="user/assets/img/services/choose4.png" alt="">
                                </div>
                                <div class="choose_text">
                                    <h3>Financial Support</h3>
                                    <p>pleasure rationally encounter are
                                        anyone who loves or pursues</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--choose us area end-->

    <!--counter up area start-->
    <div class="counterup_area mb-140">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counterup_container d-flex justify-content-between flex-wrap">
                        <div class="single_counterup">
                            <div class="counterup_text">
                                <h2><span class="counter">520</span><span>+</span></h2>
                                <p>Project done</p>
                            </div>
                        </div>
                        <div class="single_counterup">
                            <div class="counterup_text">
                                <h2><span class="counter">1200</span><span>+</span></h2>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                        <div class="single_counterup">
                            <div class="counterup_text">
                                <h2><span class="counter">320</span><span>+</span></h2>
                                <p>Branch Office</p>
                            </div>
                        </div>
                        <div class="single_counterup">
                            <div class="counterup_text">
                                <h2><span class="counter">120</span><span>+</span></h2>
                                <p>Awards Win</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--counter up area end-->

    <!--testimonial area start-->
    <div class="testimonial_area mb-132">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial_container">
                        <div class="testimonial_position_img">
                            <img src="user/assets/img/bg/testomonials-p.png" alt="">
                        </div>
                        <div class="testimonial_bg">
                            <div class="testimonial_slider slick_slider_activation" data-slick='{
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "arrows": true,
                                "dots": true,
                                "autoplay": false,
                                "speed": 300,
                                "infinite": true
                            }'>
                                <div class="single_testimonial">
                                    <div class="testimonial_content">
                                        <div class="testimonial_icon_img">
                                            <img src="user/assets/img/icon/quote.png" alt="">
                                        </div>
                                        <div class="testimonial_desc">
                                            <p>"Pleasure rationally encounter way to find painful
                                                very easily from wide range of so can buy creative
                                                or sale your dream and happy property" </p>
                                        </div>
                                        <div class="testimonial_thumb_author">
                                            <div class="author_img">
                                                <img src="user/assets/img/others/image.png" alt="">
                                            </div>
                                            <div class="author_name">
                                                <h3><a href="#">Stephen Gilbard</a></h3>
                                                <span>CEO, Alexo, New York</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_testimonial">
                                    <div class="testimonial_content">
                                        <div class="testimonial_icon_img">
                                            <img src="user/assets/img/icon/quote.png" alt="">
                                        </div>
                                        <div class="testimonial_desc">
                                            <p>"Pleasure rationally encounter way to find painful
                                                very easily from wide range of so can buy creative
                                                or sale your dream and happy property" </p>
                                        </div>
                                        <div class="testimonial_thumb_author">
                                            <div class="author_img">
                                                <img src="user/assets/img/others/image.png" alt="">
                                            </div>
                                            <div class="author_name">
                                                <h3><a href="#">Stephen Gilbard</a></h3>
                                                <span>CEO, Alexo, New York</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_testimonial">
                                    <div class="testimonial_content">
                                        <div class="testimonial_icon_img">
                                            <img src="user/assets/img/icon/quote.png" alt="">
                                        </div>
                                        <div class="testimonial_desc">
                                            <p>"Pleasure rationally encounter way to find painful
                                                very easily from wide range of so can buy creative
                                                or sale your dream and happy property" </p>
                                        </div>
                                        <div class="testimonial_thumb_author">
                                            <div class="author_img">
                                                <img src="user/assets/img/others/image.png" alt="">
                                            </div>
                                            <div class="author_name">
                                                <h3><a href="#">Stephen Gilbard</a></h3>
                                                <span>CEO, Alexo, New York</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--testimonial area end-->

    <!--blog area start-->
    <div class="blog_area">
        <div class="container">
            <div class="section_header">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="section_titile">
                            <h2>Latest Blog Post</h2>
                            <p>Pleasure rationally encounter consequences are some of easy
                                way to find extremely painful. Nor again is there anyone</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3">
                        <div class="view_all_post">
                            <a href="blog.html">View all Post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog_container">
                <div class="row blog_slick slick_slider_activation" data-slick='{
                    "slidesToShow": 3,
                    "slidesToScroll": 1,
                    "arrows": false,
                    "dots": false,
                    "autoplay": false,
                    "speed": 300,
                    "infinite": true,
                    "responsive":[
                      {"breakpoint":992, "settings": { "slidesToShow": 2 } },
                      {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                      {"breakpoint":400, "settings": { "slidesToShow": 1 } }
                     ]
                }'>
                    <div class="col-lg-4">
                        <div class="single_blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.7s">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="user/assets/img/blog/blog1.png" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <span>Real estate - 24 June, 2020 - 15 Comments</span>
                                <h3><a href="blog-details.html">How to find investor for your
                                        real estate business startup</a></h3>
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.8s">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="user/assets/img/blog/blog2.png" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <span>Real estate - 24 June, 2020 - 15 Comments</span>
                                <h3><a href="blog-details.html">How to find investor for your
                                        real estate business startup</a></h3>
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.9s">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="user/assets/img/blog/blog3.png" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <span>Real estate - 24 June, 2020 - 15 Comments</span>
                                <h3><a href="blog-details.html">How to find investor for your
                                        real estate business startup</a></h3>
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.9s">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="user/assets/img/blog/blog1.png" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <span>Real estate - 24 June, 2020 - 15 Comments</span>
                                <h3><a href="blog-details.html">How to find investor for your
                                        real estate business startup</a></h3>
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog area end-->

    <!--brand area start-->
    <!--brand area start-->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container d-flex justify-content-between flex-wrap">
                        <div class="single_brand">
                            <a class="primary_img" href="#"><img src="user/assets/img/brand/brand1.png" alt=""></a>
                            <a class="secondary_img" href="#"><img src="user/assets/img/brand/brand-hover1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary_img" href="#"><img src="user/assets/img/brand/brand2.png" alt=""></a>
                            <a class="secondary_img" href="#"><img src="user/assets/img/brand/brand-hover2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary_img" href="#"><img src="user/assets/img/brand/brand3.png" alt=""></a>
                            <a class="secondary_img" href="#"><img src="user/assets/img/brand/brand-hover3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary_img" href="#"><img src="user/assets/img/brand/brand4.png" alt=""></a>
                            <a class="secondary_img" href="#"><img src="user/assets/img/brand/brand-hover4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary_img" href="#"><img src="user/assets/img/brand/brand5.png" alt=""></a>
                            <a class="secondary_img" href="#"><img src="user/assets/img/brand/brand-hover5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->


@endsection
