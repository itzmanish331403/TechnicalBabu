<!DOCTYPE html>
<html>

<head>
    @include('includes.front-head')
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('includes.front-header')
        <!-- end header section -->
        <!-- slider section -->

        @include('includes.front-slider')
        <!-- end slider section -->
    </div>


    <section class="product_section layout_padding" id="pro">
        <div class="mycontainer">
            <div class="heading_container heading_center">
                <h2>
                    More <span>Products</span>
                </h2>
            </div>

            <div class="row">
                @foreach($product as $_product)
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="box product-animation">
                        <a href="{{ $_product->link }}">
                            <div class="option_container">
                                <div class="options">
                                    <a href="#" class="option1">
                                        ₹{{$_product->special_price}}
                                    </a>
                                    <a href="{{ $_product->link }}" class="option2">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                        </a>
                        <div class="discount"> -{{$_product->discount}}%. OFF</div>
                        <div class="img-box">
                            <img src="{{ $_product->getFirstMediaUrl('image')}}" class="girl img-responsive" alt="" />
                        </div>
                        <div class="ditaile-my">
                            <div class="detail-box">
                                <h5>
                                    ₹{{$_product->special_price}} <br>
                                </h5>
                                <h6>
                                    <div class="dark">₹{{$_product->mrp}}</div>
                                </h6>
                            </div>
                            <div class="andnew">
                                <div class="description">
                                    {{$_product->name}}
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <div class="btn-box">
                <a href="">
                    View All products
                </a>
            </div>
        </div>
</section>




    <!-- why section -->

    <section class="why_section layout_padding">
        <div class="container">
            <!-- <div class="animate-box">This is an animated div</div> -->

            <div class="heading_container heading_center">
                <h2>
                    Why Shop With Us
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box animate__animated animate__fadeInLeft">
                        <div class="detail-box">
                            <h5>
                                Fast Delivery
                            </h5>
                            <p>
                                We prioritize quick and reliable shipping to ensure you receive your order promptly.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box animate__animated animate__fadeInUp">
                        <div class="detail-box">
                            <h5>
                                Best Quality
                            </h5>
                            <p>
                                Our products are crafted with the utmost attention to detail, using high-quality
                                materials for long-lasting durability.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box animate__animated animate__fadeInRight">
                        <div class="detail-box">
                            <h5>
                                Best Products
                            </h5>
                            <p>
                                Explore our extensive collection, offering a diverse selection to cater to your specific
                                needs and preferences.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="arrival_section">
        <div class="container">
            <div class="box">
                <div class="arrival_bg_box">
                    <!-- <img src="{{asset('front/images/arrival-bg.png')}}" alt=""> -->
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <div class="heading_container remove_line_bt">
                            <h2>
                                #Join My Telegram Channel
                            </h2>
                        </div>
                        <p style="margin-top: 20px;margin-bottom: 30px;">
                            📢 Instant Notifications: Be the first to know about important announcements, product
                            launches, and upcoming events.

                            <br>🎁 Exclusive Content: Get access to exclusive content, including behind-the-scenes
                            insights, sneak peeks, and special offers.

                            Join our Telegram channel now and become a part of our growing community! Click the link
                            below to join:
                        </p>
                        <a href="https://www.instagram.com/itzmanish_000">
                            Join Now
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end why section -->

    <!-- arrival section -->

    <!-- end arrival section -->

    <!-- product section -->
    <!-- <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>products</span>
                </h2>
            </div>
            <div class="row">
                @foreach($product as $_product)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="#" class="option1">
                                    ₹{{$_product->special_price}}
                                </a>
                                
                                <a href="{{ $_product->link }}" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="discount"> -{{$_product->discount}}%. OFF</div>
                        <div class="img-box">
                            <img src="{{ $_product->getFirstMediaUrl('image')}}" class="girl img-responsive" alt="" />
                            
                        </div>
                        <div class="ditaile-my">
                            {{$_product->name}}
                            
                            
                            <div class="detail-box">
                                <h5>
                                    ₹{{$_product->special_price}} <br>
                                </h5>
                                <h6>
                                    
                                    <div class="dark">₹{{$_product->mrp}}</div>
                                </h6>
                            </div>
                                <div class="andnew">
                                    <div class="description">
                                        {{$_product->description}}
                                        
                                    </div>
                                <a href="#" class="show-more">Show More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="btn-box">
                <a href="">
                    View All products
                </a>
            </div>
        </div>
    </section> -->
    <!-- end product section -->

    <!-- subscribe section -->
    <!-- <section class="subscribe_section">
        <div class="container-fuild">
            <div class="box">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="subscribe_form ">
                            <div class="heading_container heading_center">
                                <h3>Subscribe To Get Discount Offers</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <form action="">
                                <input type="email" placeholder="Enter your email">
                                <button>
                                    subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- end subscribe section -->
    <!-- client section -->
    <!-- <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Customer's Testimonial
                </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{asset('front/images/client.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Anna Trevor
                                </h5>
                                <h6>
                                    Customer
                                </h6>
                                <p>
                                    Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde
                                    quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum
                                    ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{asset('front/images/client.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Anna Trevor
                                </h5>
                                <h6>
                                    Customer
                                </h6>
                                <p>
                                    Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde
                                    quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum
                                    ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{asset('front/images/client.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Anna Trevor
                                </h5>
                                <h6>
                                    Customer
                                </h6>
                                <p>
                                    Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde
                                    quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum
                                    ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn_box">
                    <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- end client section -->
    <!-- footer start -->
    @include('includes.front-footer')

</body>

</html>