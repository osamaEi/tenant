<head>
    <style>
    ul li {
        margin-bottom: 10px;
    }
        .container-pop {
            margin: auto;
            margin-bottom: 60px;

            width: 90%;
        }

        .gallery-pop {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            /* Add gap between grid items */
        }

        .box-pop {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .box-pop.one {
            position: relative;
            display: flex;
            overflow: hidden;
            flex-direction: column;
            border-radius: 15px;
        }

        .box-pop.one img {
            width: 100%;
            height: auto;
            /* Adjust height for responsiveness */
            object-fit: cover;
            border-radius: 15px;
            transition: .3s;
        }

        .box-pop.one img:hover {
            transform: scale(1.1);
        }

        .box-pop.one .text {
            text-align: justify;
            padding: 10px;
            top: 20px;
            right: 20px;
            position: absolute;
        }

        .box-pop.one .text h5 {
            color: #373f50;
            font-size: 32px;
            font-weight: 700;
        }

        .box-pop.one .text p {
            color: #fc7096;
            font-weight: 700;
        }

        .box-pop.two {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .box-pop.two div {
            border-radius: 15px;
            width: 267px;
            height: auto;
            /* Set height to auto for dynamic content */
            margin-bottom: 5px;
            position: relative;
            text-align: center;
        }

        .box-pop.two img {
            width: 90%;
            padding: 15px 0px;
            margin: auto;
            cursor: pointer;
            border-radius: 15px;
            transition: 0.3s;
        }

        .box-pop.two img:hover {
            transform: scale(1.1);
        }

        .box-pop.two span {
            font-size: 12px;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            line-height: 32px;
            padding: 0 8px;
            border-radius: 20px;
            background-color: #FFC12B;
            display: inline-block;
            margin-bottom: 10px;
            position: absolute;
            top: 8px;
            left: 10px;
        }

        .text-info-pop {
            margin-top: 10px;
            text-align: center;
        }

        .text-info-pop h3 {
            color: #333;
            line-height: 25px;
            font-size: 13px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .text-info-pop h3:hover {
            color: #333;

        }

        .text-info-pop .price {
            color: #ff6f96;
            font-size: 20px;
            font-weight: bold;
            margin: 0;
            display: block !important;
            margin-bottom: 7px !important;
        }

        .text-info-pop p {
            font-weight: bold;
            font-size: 15px;
            color: #6a6a6a;
            transition: .3s;
            cursor: pointer;
        }

        .text-info-pop p:hover {
            color: #ff6f96;
        }

        .flex-pop {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 0px;
        }

        .box-pop.two div:last-child {
            background: transparent;
            overflow: hidden;
        }

        .new-p-pop {
            display: none;
            color: white;
            background: #f2b30c;
            font-weight: 500;
            font-size: 19px;
            width: fit-content;
            position: relative;
            top: 10px;
            padding: 0 7px;
            right: 12px;
            border-radius: 7px;
        }

        .link-see-pop a {
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
        }

        .link-see-pop a:hover {
            color: #ff6f96 !important;

        }

        @media(max-width: 1024px) {
            .box-pop.one {
                /*display:none;*/
            }

            .gallery-pop {
                display: flow;
            }
        }

        @media(max-width: 767px) {
            /*.container-pop {*/
            /*    margin-top: -488px;*/
            /*}*/

            .gallery-pop {
                flex-direction: column-reverse;
                display: flex;
            }
        }

        /* @media (min-width: 1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1305px !important;
            }
        } */

        .icon-overlay-pop {
            position: absolute !important;
            display: flex;
            flex-direction: column;
            gap: 10px;
            top: 50px;
            right: -100px;
            /* Start off-screen */
            transition: right 0.5s ease;
            width: 60px;
        }

        .box-pop.two:hover .icon-overlay-pop {
            right: 20px;
            /* Slide it into view */
        }

        .box-pop.two {
            position: relative;
            /* Parent needs relative positioning */
        }

        .icon-overlay-pop a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            color: #fc7096;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .icon-overlay-pop a:hover {
            background-color: #ff6f96;
            color: white;
        }

        .icon-overlay-pop .icon-heart {
            color: #fc7096;
        }

        .icon-overlay-pop .icon-eye {
            color: #333;
        }

        .icon-overlay-pop .icon-bag {
            color: #fc7096;
        }

        .icon-overlay-pop a i {
            font-size: 18px;
        }

        .title-pro {
            margin-top: 60px;
            text-align: end;
            margin-bottom: 36px;

            color: #fe628c;
            font-weight: bold;
            font-size: 34px;
        }

        @media(max-width: 767px) {

            .title-pro {
                text-align: center;
                font-size: 29px;

                margin-top: 130px;
            }
        }

        /*.collection-flex-pop-icon a {*/
        /*    color: white ;*/
        /*}*/
        .collection-flex-pop-icon a {
            color: #ffffff !important;
            background: #f83a26 !important;
            font-weight: bold !important;
            font-size: 16px !important;
            padding: 7px 13px !important;
            margin-top: 12px !important;
            border: 2px solid #f83a26;
            transition: 0.3s;

        }

        .collection-flex-pop-icon:hover a {
            color: #f83a26 !important;
            background: #ffffff !important;

        }

        /*.collection-flex-pop-icon:hover{*/
        /*        background: #ffffff !important;*/
        /*    color: #f83a26 !important;*/

        /*}*/
    </style>
</head>

<!-- Start First Section -->
<section class="container-pop">
    <h2 class="title-pro"> المجموعة الأشهر </h2>

    <div class="gallery-pop">
        <div class="flex-pop">

            @foreach($data['products'] ?? [] as $product)
            <div class="box-pop two">
                <div class="image-contents" style="position: relative;">
                    <div class="category-thumb" style="position: relative; z-index: 2; background: #f5f5f5;">
                        <p class="new-p-pop">new</p>
                        {!! render_image_markup_by_attachment_id($product->image_id, 'lazyloads') !!}
<div class="icon-overlay-pop">
                        {{-- <a href="{{to_product_details($product->slug)}}">
                            {!! render_image_markup_by_attachment_id($product->image_id, 'lazyloads') !!}
                        </a> --}}
                    
                        @include(include_theme_path('shop.partials.product-options'))
                    
                        @if(!empty($discount))
                        <span class="sale bg-color-one sale-radius-1"> {{__('Sale')}} </span>
                        @endif
                    </div>
                        <!-- Start of icons overlay -->
                        <div style="display: none;" class="icon-overlay-pop">
                            <a href="#" class="icon icon-heart">
                                <i class="las la-heart"></i>
                            </a>
                            <a href="{{ route('tenant.products.single-quick-view', $product->slug) }}"
                                class="icon icon-eye">
                                <i class="las la-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="icon icon-bag add-to-cart-btn"
                                data-product_id="{{ $product->id }}">
                                <i class="las la-shopping-bag"></i>
                            </a>
                        </div>
                        <!-- End of icons overlay -->
                    </div>
                </div>
                <div class="text-info-pop">
                    <h3 class="title">{{ $product->name }}</h3>
                    <!-- Display price dynamically -->
                    <p class="price">
                        {{ amount_with_currency_symbol($product->sale_price) }}
                        @if($product->regular_price > $product->sale_price)
                        <span class="old-price">{{ amount_with_currency_symbol($product->regular_price) }}</span>
                        @endif
                    </p>

                    <p class="link-see-pop">
                    <div style="width: 164px; display: inline-block; margin: auto; border-radius: 0;"
                        class="collection-flex-pop-icon">
                        @if($product->inventory_detail_count < 1) <a href="javascript:void(0)"
                            class="cmn-btn cmn-btn-bg-1 cmn-btn-small radius-0 shopping-icon cart-loading add-to-cart-btn"
                            data-product_id="{{ $product->id }}">
                            <i class="las la-shopping-bag"></i> أضف إلي السلة
                            </a>
                            @else
                            <a href="javascript:void(0)" style="width: 164px; margin: auto; border-radius: 0;"
                                class="cmn-btn cmn-btn-bg-1 cmn-btn-small radius-0 shopping-icon cart-loading product-quick-view-ajax"
                                data-action-route="{{ route('tenant.products.single-quick-view', $product->slug) }}">
                                <i class="las la-shopping-bag"></i> أضف إلي السلة
                            </a>
                            @endif
                    </div>
                    </p>
                </div>
            </div>
            @endforeach

        </div>
        <div class="box-pop one">
            <img src="https://ww.baby-yummy.com/wp-content/uploads/2023/11/h10-boy.jpg" alt="unknown image" />
            <div class="text">
                <h5>ملابس للأطفال</h5>
            </div>
        </div>
    </div>
</section>
<!-- End First Section -->


<!-- Popular Collection area Starts -->
<section class="collection-area" data-padding-top="{{$data['padding_top']}}"
    data-padding-bottom="{{$data['padding_bottom']}}">
    <div class="container-two">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-left section-title-two">
                    <h2 class="title"> {{$data['title'] ?? ''}} </h2>

                    @if(!empty($data['see_all_url']) && !empty($data['see_all_text']))
                    <a href="{{$data['see_all_url']}}">
                        <span class="see-all fs-18"> {{$data['see_all_text']}} </span>
                    </a>
                    @endif
                </div>
            </div>
        </div>
        <div class="row margin-top-10">
            @foreach($data['products'] ?? [] as $product)
            @php
            $sale_data = get_product_dynamic_price($product);
            $regular_price = $sale_data['regular_price'];
            $sale_price = $sale_data['sale_price'];
            $discount = $sale_data['discount'];

            $delay = '.1s';
            $class = 'fadeInUp';

            if ($loop->even)
            {
            $delay = '.2s';
            $class = 'fadeInDown';
            }
            @endphp

            <div class="col-xl-3 col-md-4 col-sm-6 col-{{productCards()}} margin-top-30 wow {{$class}}"
                data-wow-delay="{{$delay}}">
                <div class="signle-collection bg-item-four radius-20">
                    <div class="collction-thumb">
                        <a href="{{to_product_details($product->slug)}}">
                            {!! render_image_markup_by_attachment_id($product->image_id, 'lazyloads') !!}
                        </a>

                        @include(include_theme_path('shop.partials.product-options'))

                        @if(!empty($discount))
                        <span class="sale bg-color-one sale-radius-1"> {{__('Sale')}} </span>
                        @endif
                    </div>

                    <div class="collection-contents">
                        <h2 class="collection-title ff-jost">
                            <a href="{{to_product_details($product->slug)}}"> {!! product_limited_text($product->name,
                                'title') !!} </a>
                        </h2>
                        <div class="collection-flex-pop">
                            <div class="price-update-through margin-top-15">
                                <span class="fs-22 ff-roboto fw-500 flash-prices color-one">
                                    {{amount_with_currency_symbol(calculatePrice($sale_price, $product))}} </span>
                                <span class="fs-18 flash-old-prices"> {{amount_with_currency_symbol($regular_price)}}
                                </span>
                            </div>
                            <div class="collection-flex-pop-icon">
                                @if($product->inventory_detail_count < 1) <a href="javascript:void(0)"
                                    class="shopping-icon cart-loading add-to-cart-btn"
                                    data-product_id="{{ $product->id }}">
                                    <i class="las la-shopping-bag"></i>
                                    </a>
                                    @else
                                    <a href="javascript:void(0)"
                                        class="shopping-icon cart-loading product-quick-view-ajax"
                                        data-action-route="{{ route('tenant.products.single-quick-view', $product->slug) }}">
                                        <i class="las la-shopping-bag"></i>
                                    </a>
                                    @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Popular Collection area end -->


<script>
$('.icon-cart-loading').on('click', function(event) {
event.preventDefault();
// Your custom behavior here (e.g., AJAX to add to wishlist)
});
</script>