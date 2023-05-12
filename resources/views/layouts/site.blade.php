<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('site_assets/images/icons/favicon.png')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/vendor/MagnificPopup/magnific-popup.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('site_assets/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body class="animsition">

{{$slot}}



<!-- Modal1 -->
<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
    <div class="overlay-modal1 js-hide-modal1"></div>

    <div class="container">
        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                <img src="{{asset('site_assets/images/icons/icon-close.png')}}" alt="CLOSE">
            </button>

            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg" id="main_images">
                        <div id="model_images" class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14" id="model_product_name"></h4>
                        <span class="mtext-106 cl2" id="model_product_price"></span>
                        <p class="stext-102 cl3 p-t-23" id="model_product_descriptions"></p>

                        <input type="hidden" id="product_id">

                        <div class="p-t-33">

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number" id="number_cart" value="1">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>

                                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" onclick="add_to_cart()">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                            <div class="flex-m bor9 p-r-10 m-r-11">
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                    <i class="zmdi zmdi-favorite"></i>
                                </a>
                            </div>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Login Modal -->
<button type="button" id="login_model_button" hidden class="btn btn-primary" data-toggle="modal" data-target="#login_model" data-whatever="@mdo"></button>
<div class="modal fade" style="margin-top: 10%;" id="login_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('login') }}">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>


<!--===============================================================================================-->
<script src="{{asset('site_assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('site_assets/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
<script src="{{asset('site_assets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('site_assets/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('site_assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('site_assets/vendor/select2/select2.min.js')}}"></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="{{asset('site_assets/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('site_assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('site_assets/vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('site_assets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('site_assets/vendor/parallax100/parallax100.js')}}"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="{{asset('site_assets/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>


<!--===============================================================================================-->
<script src="{{asset('site_assets/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('site_assets/vendor/sweetalert/sweetalert.min.js')}}"></script>

<script>

    $('.js-show-login').on('click', function(e){
        e.preventDefault();
        $('#login_model_button').click();

    });

    function add_to_wishlist(id,name)
    {
        @if(!Auth::check())

            $('#login_model_button').click();

        @else

        let data = {
            "_token":"{{ csrf_token() }}",
            "product_id":id,
        };
        $.ajax({
            type: "POST",
            url: "/wishlist/"+id+"/add",
            dataType: "json",
            data:data,

            success: function (response)
            {
                if(response.status==1)
                {
                    swal(name, `${response.message}`, "success");
                }
                else
                {
                    swal(name, `${response.message}`, "warning");
                }
                wishlist();

            }
        });
        @endif

    }


</script>
<!--===============================================================================================-->
<script src="{{asset('site_assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script>
    $('.js-pscroll').each(function(){
        $(this).css('position','relative');
        $(this).css('overflow','hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function(){
            ps.update();
        })
    });
</script>
<!--===============================================================================================-->
<script src="{{asset('site_assets/js/main.js')}}"></script>


<script>

    function show_product(id)
    {

        $('#number_cart').val(1);
        $('#model_images').remove();
        let test=`
                            <div class="wrap-slick3 flex-sb flex-w" id="model_images">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                <div class="slick3 gallery-lb">
                                </div>
                            </div>
                            `;
        $('#main_images').append(test);

        let images='';
        $.ajax({
            type: "GET",
            url: "/product/"+id+"/show",
            dataType: "json",
            // data:data,

            success: function (response)
            {

                let product=response.data;

                if((product.pictures).includes(","))
                {
                    $.each(product.pictures.split(","),function(key,image){
                        images+=
                            `
                            <div class="item-slick3" data-thumb="{{asset('product_images')}}/${image}">
                                <div class="wrap-pic-w pos-relative">

                                    <img src="{{asset('product_images')}}/${image}">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('product_images')}}/${image}">
                                            <i class="fa fa-expand"></i>
                                        </a>

                                </div>
                            </div>
                            `;
                    });
                }
                else
                {
                    images+=
                        `
                    <div class="item-slick3" data-thumb="{{asset('product_images')}}/${product.pictures}">
                        <div class="wrap-pic-w pos-relative">

                            <img src="{{asset('product_images')}}/${product.pictures}" alt="${product.name}">

                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('product_images')}}/${product.pictures}">
                                    <i class="fa fa-expand"></i>
                                </a>

                        </div>
                    </div>

                    `;
                }
                $('#product_id').val(product.id);
                $('#model_product_name').html(product.name);
                $('#model_product_price').html('$'+product.price);
                $('#model_product_descriptions').html(product.descriptions);
                $('.slick3').append(images);
                $('.js-modal1').addClass('show-modal1');


                /*
                    [ Slick3 ]
                */

                $('.wrap-slick3').each(function(){

                    $(this).find('.slick3').slick({

                        slidesToShow: 1,
                        slidesToScroll: 1,
                        fade: true,
                        infinite: true,
                        autoplay: false,
                        autoplaySpeed: 6000,

                        arrows: true,
                        appendArrows: $(this).find('.wrap-slick3-arrows'),
                        prevArrow:'<button class="arrow-slick3 prev-slick3"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
                        nextArrow:'<button class="arrow-slick3 next-slick3"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',

                        dots: true,
                        appendDots: $(this).find('.wrap-slick3-dots'),
                        dotsClass:'slick3-dots',
                        customPaging: function(slick, index) {
                            var portrait = $(slick.$slides[index]).data('thumb');
                            return '<img src=" ' + portrait + ' "/><div class="slick3-dot-overlay"></div>';
                        },

                    });

                });

            }
        });
    }

</script>

<script>

    function add_to_cart()
    {

        @if(!Auth::check())

        $('#login_model_button').click();

        @else

        let id=$('#product_id').val();
        let quantity=$('#number_cart').val();

        let data = {
            "_token":"{{ csrf_token() }}",
            "product_id":id,
            "quantity":quantity,
        };

        $.ajax({

            type: "POST",
            url: "/cart/"+id+"/add",
            dataType: "json",
            data:data,

            success: function (response)
            {
                if(response.status===1)
                {
                    swal(name, `${response.message}`, "success");
                    cart();
                }
                else
                {
                    swal(name, `${response.message}`, "warning");
                }
            }
        });

        @endif

    }

    function transfer_to_cart(wishlist_id,product_id)
    {
        let quantity=1;

        let data = {
            "_token":"{{ csrf_token() }}",
            "wishlist_id":wishlist_id,
            "product_id":product_id,
            "quantity":quantity,
        };

        $.ajax({
            type: "POST",
            url: "/wishlist/to/"+wishlist_id+"/cart",
            dataType: "json",
            data:data,

            success: function (response)
            {
                if(response.status==1)
                {
                    swal(name, `${response.message}`, "success");
                    cart();
                    wishlist();
                }
                else
                {
                    swal(name, `${response.message}`, "warning");
                }


            }
        });


    }

    @if(Auth::check())

    function cart()
    {

        let data = {
            "_token":"{{ csrf_token() }}"
        };
        let product_cart='';
        let product_multiple_image=[];
        let total=0;
        $.ajax({
            type: "GET",
            url: "{{route('cart.list')}}",
            dataType: "json",
            data:data,
            success: function (response)
            {
                $('#cart_list_item').empty();

                $('#shopping_cart_count').attr('data-notify', response.data.length);

                $.each(response.data,function(key,item){

                    total+=parseInt(item.quantity) * parseInt(item.product.price);

                    product_cart+=`

                        <li class="header-cart-item flex-w flex-t m-b-12">

                            <div class="header-cart-item-img" onclick="remove_from_cart(${item.id})">
                                `;

                    if((item.product.pictures).includes(','))
                    {
                        $.each(item.product.pictures.split(","),function(key,image){

                            product_cart+=`<img src="{{asset('product_images')}}/${image}" alt="IMG">`;

                        });

                    }
                    else
                    {
                        product_cart+=`<img src="{{asset('product_images')}}/${item.product.pictures}" alt="IMG">`;

                    }

                    product_cart+=`

                            </div>

                            <div class="header-cart-item-txt p-t-8">

                                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    ${item.product.name}
                                </a>

                                <span class="header-cart-item-info">
                                        ${item.quantity} x $ ${item.product.price}
                                </span>

                            </div>

                        </li>

                    `;


                });
                $('#total_cart').html(`Total :${total}`)

                $('#cart_list_item').append(product_cart);


            }
        });


    }
    cart();


    function wishlist()
    {

        let data = {
            "_token":"{{ csrf_token() }}"
        };

        $.ajax({
            type: "GET",
            url: "{{route('wishlist.list')}}",
            dataType: "json",
            data:data,
            success: function (response)
            {
                $('#wishlist_count').attr('data-notify', response.data.length);
            }
        });
    }
    wishlist();


    function remove_from_cart(id)
    {
        let data = {
            "_token":"{{ csrf_token() }}",
        };

        $.ajax({
            type: "POST",
            url: "/cart/"+id+"/destroy",
            dataType: "json",
            data:data,

            success: function (response)
            {
                console.log(response.message);
                swal(name, "Is Deleted to Cart !", "success");
                cart();
            }
        });
    }

    function remove_form_wishlist(id)
    {
        let data = {
            "_token":"{{ csrf_token() }}",
        };

        $.ajax({
            type: "POST",
            url: "/wishlist/"+id+"/destroy",
            dataType: "json",
            data:data,

            success: function (response)
            {
                swal(name, "Is Deleted From Wishlist !", "success");
                cart();
            }
        });
    }

    @endif

</script>

</body>
</html>
