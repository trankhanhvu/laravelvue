<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TITLE -->
    <title>WOW SHOP</title>
    <!-- bootstrap.min.css -->
    <link href={{ asset('source/css/bootstrap.min.css') }} rel="stylesheet">
    <!-- font-awesome.min.css -->
    <link href={{asset('source/css/font-awesome.min.css')}} rel="stylesheet">
    <!-- slicknav.min.css -->
    <link href={{asset('source/css/slicknav.min.css')}} rel="stylesheet">
    <!-- ui.css -->
    <link href="source/css/ui.css" rel="stylesheet">
    <!-- hover.css -->
    <link href={{asset('source/css/magnific-popup.css')}} rel="stylesheet">
    <!-- owl.css -->
    <link href={{asset('source/css/owl.carousel.css')}} rel="stylesheet">
    <!-- animate.min.css -->
    <link href={{asset('source/css/animate.min.css')}} rel="stylesheet">
    <!-- style.css -->
    <link href={{asset('source/style.css')}} rel="stylesheet">
    <!-- responsive.css -->
    <link href={{asset('source/css/responsive.css')}} rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163870873-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-163870873-5');
    </script>

    @yield('css')
</head>

<body>
    <!-- Page preloader -->
    <div id="loading">
        <div id="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- header area -->
    @include('frontend.layout.header')

    @yield('breadcrum')

    @yield('content')

    <!-- footer start -->
    @include('frontend.layout.footer')
    <!-- footer end -->

    <!-- jquery.js -->
    <script src={{asset('source/js/jquery.js')}}></script>




    <!-- jquery.popper.min.js -->
    <script src={{asset('source/js/popper.min.js')}}></script>
    <!-- bootstrap.min.js -->
    <script src={{asset('source/js/bootstrap.min.js')}}></script>
    <!-- jquery.slicknav.min.js -->
    <script src={{asset('source/js/jquery.slicknav.min.js')}}></script>
    <!-- jquery.magnific.min.js -->
    <script src={{asset('source/js/jquery.magnific-popup.min.js')}}></script>
    <!-- jquery.masonry.min.js -->
    <script src={{asset('source/js/masonary.js')}}></script>
    <!-- jquery.owl.min.js -->
    <script src={{asset('source/js/owl.carousel.min.js')}}></script>
    <!-- jquery.wowo.min.js -->
    <script src={{asset('source/js/wow.min.js')}}></script>
    <!-- main.js -->

    <script src="{{asset('source/js/jquery.ui.js')}}"></script>

    <script src={{asset('source/js/mine.js')}}></script>
    <script src={{asset('source/js/jquery.pjax.js')}}></script>
    <script src={{asset('source/js/main.js')}}></script>

    <script>
        var source = [ {    value: "www.google.com",
                            label: "Spencer Kline"
                    },
                        {   value: "www.facebool.com",
                            label: "James Bond"
               },
            ];

        $(document).ready(function() {
            $("input#autocomplete").autocomplete({
                source: source,
                select: function( event, ui ) { 
                window.location.href = ui.item.value;
                }
            });
        });
    </script>
    @yield('script')
</body>

</html>