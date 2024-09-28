<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body,
        .ff-jost {
            font-family: "Cairo", sans-serif !important;
        }

        .banner-right-contents-all {
            /*margin-top: 369px !important;*/
            height: 100vh;
            transition: 1s;
        }

        @media (min-width: 320px) and (max-width: 991.98px) {
            .banner-right-contents-all {
                display: block !important;
            }
        }

        .banner-contents-wrappers.bg-item-four.radius-30 {
            background-color: white !important;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li a {
            font-size: 17px;
            font-weight: 600;
            text-decoration: none;
            color: #373f50 !important;
            line-height: 24px;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li a:hover {
            color: red !important;
        }

        .lazyloads {
            height: 100% !important;
        }

        .banner-area {
            border-top: 1px solid #d6d6d6;
        }

        .banner-images-right {
            opacity: 0;
            visibility: hidden;
            position: static !important;
            transition: opacity 1s ease-in-out, visibility 0s 1s;
            left: 0px !important;
        }

        .banner-images-right.active {
            opacity: 1;
            visibility: visible !important;
            transition: opacity 1s ease-in-out, visibility 0s;
        }

        .banner-left-products.banner-left-products-slider {
            display: none
        }

        .banner-two .banner-contents {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0 !important;
            max-width: none !important;
            margin: auto;
            position: absolute;
            top: 103px;
            left: 250px;
        }

        .container-two {
            padding: 0 !important;
            margin: 0 !important;
            max-width: 1582px;
        }

        .banner-contents-wrappers {
            border-radius: 0 !important;
        }

        .section-title.text-left {
            text-align: left;
            margin-top: 40px;
            padding-right: 40px;
            padding-left: 40px;
        }

        #buttons {
            width: 100%;
            display: flex;
            position: absolute;
            top: 4%;
            z-index: 99999999999999999;
        }

        @media (max-width: 991.98px) {
            .banner-store.color-heading.fs-26 {
                font-size: 21px !important;
            }
        }

        @media (max-width: 991.98px) {
            .banner-socials .social-lists li a {
                font-size: 17px;
            }
        }

        .banner-contents .title {
            color: #373f50 !important;
            font-weight: bolder !important;
            margin-top: 82px;
            padding-bottom: 5px;
        }

        .banner-contents p {
            color: #7e7e7e;
            text-align: justify;
            margin-right: -7%;
            font-size: 16px;
            width: 500px;
            line-height: 1.9;
            font-weight: bold;
        }

        @media (max-width: 1024px) {
            .banner-contents .title {
                margin-top: 58px;
            }

            .banner-contents p {
                margin-top: 16px;
                width: 409px;
                overflow: inherit;
            }
        }

        @media (max-width: 903px) {
            .banner-contents .title {
                margin-top: -3px;
            }

            .banner-contents p {
                display: none;
            }
        }

        @media (max-width: 767px) {

            .banner-two .banner-contents {
                left: -51px;
                width: 100% !important;
                text-align: center;
                top: -68px;
            }

            .lazyloads {
                height: 40% !important;
                max-width: -webkit-fill-available !important;
            }

            #buttons {
                top: 2% !important;
            }

            .banner-contents .title {
                font-size: 35px !important;
            }
        }

        @media only screen and (max-width: 375px) {
            .banner-socials .social-lists {
                margin-left: 26px !important;
            }
        }

        .slide-controls button {
            border: none;
            padding: 5px 10px;
            background: #333;
            color: white;
            border-radius: 7px;
            cursor: pointer;
            display: inline-flex;
        }

        .comingsoon-btn .comingsoon-order.brows-category,
        .comingsoon-order.brows-category,
        .comingsoon-btn .comingsoon-order.brows-category,
        .comingsoon-btn .comingsoon-order {
            color: rgb(255 255 255) !important;
            background: #ff6f96;
            font-size: 15px;
            font-weight: bold;
            border-radius: 20px;
            transition: 0.3s;
            padding: 10px 15px;
        }

        .comingsoon-btn .comingsoon-order.brows-category:hover,
        .comingsoon-order.brows-category,
        .comingsoon-btn .comingsoon-order.brows-category {
            background: #dc4b72;
            border: 1px solid #ff6f96;
            color: rgb(255 255 255);
            background: #ff6f96;
            font-size: 15px;
            font-weight: bold;
            border-radius: 20px;
            transition: 0.3s;
            padding: 10px 15px;
            text-decoration: none;
        }

        .asfr-img {
    position: absolute !important;
    top: -4px;
    height: 100vh;
    width: 100%;
    visibility: visible;
    animation-delay: 0.3s;
            }


    </style>
</head>
@php
$primary_image = get_attachment_image_by_id($data['primary_image']);
$primary_image = !empty($primary_image) ? $primary_image['img_url'] : '';

$particle_image_one = get_attachment_image_by_id($data['particle_image_one']);
$particle_image_one = !empty($particle_image_one) ? $particle_image_one['img_url'] : theme_assets('img/shape1.png');

$particle_image_two = get_attachment_image_by_id($data['particle_image_two']);
$particle_image_two = !empty($particle_image_two) ? $particle_image_two['img_url'] : theme_assets('img/shape2.png');

$particle_image_three = get_attachment_image_by_id($data['particle_image_three']);
$particle_image_three = !empty($particle_image_three)
? $particle_image_three['img_url']
: theme_assets('img/shape3.png');

$particle_image_four = get_attachment_image_by_id($data['particle_image_four']);
$particle_image_four = !empty($particle_image_four)
? $particle_image_four['img_url']
: theme_assets('img/shape4.png');
@endphp

<!-- Banner area end -->


<div class="banner-area banner-two position-relative" data-padding-top="{{ $data['padding_top'] }}" data-padding-bottom="{{ $data['padding_bottom'] }}">
    <div class="container-two">
        <div class="banner-contents-wrappers bg-item-four radius-30">
            <div class="banner-shapes">
                <img src="{{ $particle_image_one }}" alt="">
                <img src="{{ $particle_image_two }}" alt="">
                <img src="{{ $particle_image_three }}" alt="">
                <img src="{{ $particle_image_four }}" alt="">
            </div>
            <div class="banner-contents">

                <div class="banner-left-products banner-left-products-slider mt-4">
                    <div class="global-slick-init slider-inner-margin nav-style-one" data-slidesToShow="2" data-infinite="true" data-arrows="false" data-dots="false" data-swipeToSlide="true" data-centerMode="false" data-centerPadding="40px" data-autoplay="false" data-autoplaySpeed="6000" data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>' data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>' data-rtl="{{ get_user_lang_direction() == 1 ? 'true' : 'false' }}" data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 2}},{"breakpoint": 1200,"settings": {"slidesToShow": 2}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 575, "settings": {"slidesToShow": 1} }]'>
                        @foreach ($data['products'] ?? [] as $key => $product)
                        @php
                        $price_data = get_product_dynamic_price($product);
                        $regular_price = $price_data['regular_price'];
                        $sale_price = $price_data['sale_price'];
                        @endphp

                        <div class="banner-single-products bg-white radius-20 margin-top-30">
                            <div class="banner-product-thumb radius-10">
                                <a href="{{ to_product_details($product->slug) }}">
                                    {!! render_image_markup_by_attachment_id($product->image_id) !!}
                                </a>
                            </div>
                            <div class="banner-product-flex">
                                <div class="single-flex-banner">
                                    <h6 class="banner_title ff-jost">
                                        <a href="{{ to_product_details($product->slug) }}">
                                            {{ Str::limit($product->name, 12, '..') }}
                                        </a>
                                    </h6>
                                    <span class="common-price-title color-one fs-18 fw-700">
                                        {{ amount_with_currency_symbol($sale_price) }} </span>
                                </div>
                                <div class="banner-iconlist">
                                    <a href="{{ to_product_details($product->slug) }}" class="banner-icon popup-modal">
                                        <i class="lar la-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="banner-socials">
                <ul class="social-lists">
                    @foreach ($data['social_repeater']['name_'] ?? [] as $key => $value)
                    @continue(empty($value))
                    <li>
                        @php
                        $title = $data['social_repeater']['name_'][$key] ?? '';
                        $url = $data['social_repeater']['url_'][$key] ?? '#';
                        @endphp
                        <a href="{{ esc_url($url) }}" {{ !empty($data['new_tab']) ? 'target=""_blank' : '' }}>
                            {{ esc_html($title) }} </a>
                    </li>
                    @endforeach
                </ul>
            </div>


            <!--================================== -->
            <!--================================== -->
            <!--================================== -->





            <div class="banner-right-contents-all">

                <div id="slide1" style="height: 100vh;" class="banner-images-right wow " data-wow-delay=".3s">
                    <img class="lazyloads" src="https://ww.baby-yummy.com/wp-content/uploads/2023/11/h10-slide1-1.jpg" alt="">
                    <div class="banner-contents">
                        <h2 class="title ff-jost fw-600 animate__animated animate__fadeInRight">ملابس التوائم</h2>
                        <p class="animate__animated animate__fadeInLeft">غالبًا ما يعكس اختيار ملابس التوائم تآلفًا مميزًا
                            بينهما، حيث يختار البعض إلباسهما ملابس
                            متطابقة لإبراز الرابط الخاص بينهما.</p>
                        @if (!empty($data['button_text']) && !empty($data['button_url'] ?? ''))
                        <div class="animate__animated animate__fadeInRight comingsoon-btn margin-top-40">
                            <a href="{{ $data['button_url'] ?? '' }}" class="comingsoon-order brows-category">
                                تسوق الأن
                            </a>
                        </div>
                        @endif
                    </div>
                </div>

                <div id="slide2" class="banner-images-right wow asfr-img" data-wow-delay=".3s" style="">
                    <img class="lazyloads" src="http://ww.baby-yummy.com/wp-content/uploads/2023/11/h10-slide3.jpg" alt="">
                    <div class="banner-contents">
                        <h2 style="color: white !important;" class="animate__animated animate__fadeInRight title ff-jost fw-600">مجموعة الألوان</h2>
                        <p style="color: white; margin-right: -14%;" class="animate__animated animate__fadeInLeft">غالبًا
                            ما يعكس اختيار ملابس التوائم تآلفًا مميزًا
                            بينهما، حيث يختار البعض إلباسهما ملابس متطابقة لإبراز الرابط الخاص بينهما.</p>
                        @if (!empty($data['button_text']) && !empty($data['button_url'] ?? ''))
                        <div class="animate__animated animate__fadeInRight comingsoon-btn margin-top-40">
                            <a href="{{ $data['button_url'] ?? '' }}" class="comingsoon-order brows-category"> تسوق الأن
                            </a>
                        </div>
                        @endif
                    </div>
                </div>

                <div id="slide3" class="asfr-img banner-images-right wow " data-wow-delay=".3s" style="">
                    <img class="lazyloads" src="http://ww.baby-yummy.com/wp-content/uploads/2023/11/h10-slide2.jpg" alt="">
                    <div class="banner-contents">
                        <h2 class="animate__animated animate__fadeInRight title ff-jost fw-600">ملابس الشتاء</h2>
                        <p class="animate__animated animate__fadeInLeft">غالبًا ما يعكس اختيار ملابس التوائم تآلفًا مميزًا
                            بينهما، حيث يختار البعض إلباسهما ملابس
                            متطابقة لإبراز الرابط الخاص بينهما.</p>
                        @if (!empty($data['button_text']) && !empty($data['button_url'] ?? ''))
                        <div class="animate__animated animate__fadeInRight comingsoon-btn margin-top-40">
                            <a href="{{ $data['button_url'] ?? '' }}" class="comingsoon-order brows-category"> تسوق الأن
                            </a>
                        </div>
                        @endif
                    </div>
                </div>

                <div id="buttons" class="slide-controls">
                    <button style="border: none; background: #a7a7a79c; height: 40px;
                                    width: 40px; font-size: 20px; color: white; border-radius: 50%;
                                    margin-right: 10px; cursor: pointer; display: inline-flex;
                                    display: flex; align-items: center; justify-content: center;" onclick="prevSlide()">
                        <i class="las la-angle-right"></i>
                    </button>
                    <button style="border: none; background: #a7a7a79c; height: 40px;
                                    width: 40px; font-size: 20px; color: white; border-radius: 50%;
                                    margin-left: 10px; cursor: pointer; display: inline-flex;
                                    margin-right: auto; display: flex; align-items: center;
                                    justify-content: center;" onclick="nextSlide()"><i class="las la-angle-left"></i>
                    </button>
                </div>

            </div>


            <script>
                let currentSlide = 1;
                const totalSlides = 3;

                function showSlide(slideIndex) {
                    for (let i = 1; i <= totalSlides; i++) {
                        const slide = document.getElementById(`slide${i}`);
                        slide.classList.remove('active');
                    }
                    const selectedSlide = document.getElementById(`slide${slideIndex}`);
                    selectedSlide.classList.add('active');
                    
                }

                function nextSlide() {
                    currentSlide++;
                    if (currentSlide > totalSlides) {
                        currentSlide = 1;
                    }
                    showSlide(currentSlide);
                }

                function prevSlide() {
                    currentSlide--;
                    if (currentSlide < 1) {
                        currentSlide = totalSlides;
                    }
                    showSlide(currentSlide);
                }
                showSlide(currentSlide);
                setInterval(nextSlide, 3000);

            </script>
