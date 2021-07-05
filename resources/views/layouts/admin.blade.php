<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('backpage/images/favicon.png')}}">
    <link rel="stylesheet" href="{{url('backpage/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{url('backpage/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{url('backpage/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{url('backpage/css/style.css')}}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('includes.admin.header')

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('includes.admin.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->

        @include('includes.admin.footer')

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{url('backpage/vendor/global/global.min.js')}}"></script>
    <script src="{{url('backpage/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{url('backpage/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{url('backpage/js/custom.min.js')}}"></script>
    <script src="{{url('backpage/js/deznav-init.js')}}"></script>
    <script src="{{url('backpage/vendor/owl-carousel/owl.carousel.js')}}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{url('backpage/vendor/peity/jquery.peity.min.js')}}"></script>

    <!-- Apex Chart -->
    <script src="{{url('backpage/vendor/apexchart/apexchart.js')}}"></script>

    <!-- Dashboard 1 -->
    <script src="{{url('backpage/js/dashboard/dashboard-1.js')}}"></script>
    <script>
        function carouselReview() {
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop: true,
				autoplay: true,
				margin: 30,
				nav: false,
				dots: false,
				left: true,
				navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
				responsive: {
					0: {
						items: 1
					},
					484: {
						items: 2
					},
					882: {
						items: 3
					},
					1200: {
						items: 2
					},

					1540: {
						items: 3
					},
					1740: {
						items: 4
					}
				}
			})
		}
		jQuery(window).on('load', function () {
			setTimeout(function () {
				carouselReview();
			}, 1000);
		});
    </script>
</body>

</html>
