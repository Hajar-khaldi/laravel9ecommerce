<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.ico') }}">
{{-- <link href="{{ asset('frontend/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet"> --}}
{{-- <link href="{{ asset('frontend/plugins/fancybox/fancybox.min.css') }}" type="text/css" rel="stylesheet"> --}}
{{-- <link href="{{ asset('frontend/plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet"> --}}
{{-- <link href="{{ asset('frontend/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet"> --}}

<!-- Bootstrap-ecommerce -->
<link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend/css/ui.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">

<!-- Font awesome 5 -->
<link rel="preload" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/fonts/fontawesome/webfonts/fa-solid-900.woff2" as="font" type="font/woff" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" type="text/css" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

{{-- range filter price --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css">
    .section-header,
    .section-footer {
        box-shadow: 0 2px 10px rgb(51 51 51 / 10%);
        position: relative;
    }
/* load filter */

        /*!
        * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
        * Copyright 2015 Daniel Cardoso <@DanielCardoso>
        * Licensed under MIT
        */
        .la-cog,
        .la-cog > div {
            /* position: relative; */
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .la-cog {
            display: block;
            font-size: 0;
            color: #000000;
            position: absolute;
            opacity: 1;
        }
        .la-cog.la-dark {
            color: #333;
        }
        .la-cog > div {
            display: inline-block;
            float: none;
            background-color: currentColor;
            border: 0 solid currentColor;
        }
        .la-cog {
            width: 4rem;
            height: 4rem;
            z-index: 2;
            margin: 0 auto;
        }
        .la-cog > div {
            width: 100%;
            height: 100%;
            background-color: transparent;
            border-style: dashed;
            border-width: 2px;
            border-radius: 100%;
            -webkit-animation: cog-rotate 4s linear infinite;
            -moz-animation: cog-rotate 4s linear infinite;
            -o-animation: cog-rotate 4s linear infinite;
            animation: cog-rotate 4s linear infinite;
        }
        .la-cog > div:after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            content: "";
            border: 2px solid currentColor;
            border-radius: 100%;
        }
        .la-cog.la-sm {
            width: 15px;
            height: 15px;
        }
        .la-cog.la-sm > div {
            border-width: 1px;
        }
        .la-cog.la-sm > div:after {
            border-width: 1px;
        }
        .la-cog.la-2x {
            width: 61px;
            height: 61px;
        }
        .la-cog.la-2x > div {
            border-width: 4px;
        }
        .la-cog.la-2x > div:after {
            border-width: 4px;
        }
        .la-cog.la-3x {
            width: 91px;
            height: 91px;
        }
        .la-cog.la-3x > div {
            border-width: 6px;
        }
        .la-cog.la-3x > div:after {
            border-width: 6px;
        }
        /*
        * Animation
        */
        @-webkit-keyframes cog-rotate {
            0% {
                -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                        transform: rotate(360deg);
            }
        }
        @-moz-keyframes cog-rotate {
            0% {
                -moz-transform: rotate(0deg);
                    transform: rotate(0deg);
            }
            100% {
                -moz-transform: rotate(360deg);
                    transform: rotate(360deg);
            }
        }
        @-o-keyframes cog-rotate {
            0% {
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes cog-rotate {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                    -o-transform: rotate(0deg);
                        transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                    -o-transform: rotate(360deg);
                        transform: rotate(360deg);
            }
        }


.la-cog {
    position: absolute;
    /* transform: translate(-50%, 400%); */
    /* left: 50%; */
}

.load:before {
    /* content: ""; */
    position: absolute;
    opacity: 0.7;
    background-color: #fff;
    display: block;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.load {
    position: absolute;
    opacity: 0.7;
    background-color: #fff;
    display: block;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.sticky_loader {
    top: 0;
    display: flex;
    position: sticky;
    z-index: 1;
    height: 100vh;
    align-items: center;
    justify-content: center;
}
/* wishlist : heart full */
.added {
    border-color: #c1c9d0;
    color: #0d6efd;
}
.added i {
    color: #0d6efd;
}
</style>
