<!-- Small Devices Header
============================================= -->
<div class="dtr-responsive-header fixed-top">
    <div class="container">

        <!-- small devices logo -->
        <a href="{{route('home')}}"><img src="{{url('frontpage/assets/images/logo-dark.png')}}" alt="logo"></a>
        <!-- small devices logo ends -->

        <!-- menu button -->
        <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span
                    class="dtr-hamburger-lines"></span></span></button>
    </div>
    <div class="dtr-responsive-header-menu"></div>
</div>
<!-- Small Devices Header ends
============================================= -->

<!-- header starts
============================================= -->
<header id="dtr-header-global" class="fixed-top">
    <div class="d-flex align-items-center justify-content-between">

        <!-- header left starts -->
        <div class="dtr-header-left">

            <!-- logo -->

            <a class="logo-default dtr-scroll-link" href="{{route('home')}}"><img
                    src="{{url('frontpage/assets/images/logo-dark.png')}}" alt="logo"></a>

            <!-- logo on scroll -->
            <a class="logo-alt dtr-scroll-link" href="{{route('home')}}"><img
                    src="{{url('frontpage/assets/images/logo-dark.png')}}" alt="logo"></a>
            <!-- logo on scroll ends -->

        </div>
        <!-- header left ends -->

        <!-- header right starts -->
        <div class="dtr-header-right ml-auto d-flex flex-row-reverse align-items-center">

            <!-- contact starts -->
            <div class="dtr-header-contact dtr-ml-50 position-relative">
                @if (Route::has('login'))
                @auth
                <a href="{{route('dashboard')}}" class="menu-dropdown">
                    <img style="width: 50%; height: auto;" src="{{url('frontpage/assets/images/ic-profile.png')}}"
                        alt="" srcset="">
                </a>
                <div class="bg-white rounded p-3 pop-up-menu">
                    <a href="{{route('profile')}}" class="d-block">Profile</a>
                    <a href="{{route('transaksi')}}" class="d-block">Transaksi</a>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="d-block">Logout</button>
                    </form>
                </div>
                @else
                @if (Route::currentRouteName() == 'login')
                <a href="{{route('register')}}" class="dtr-btn dtr-btn-right-icon dtr-mr-5 btn-dark-blue">Daftar<span
                        class="btn-span"><i class="icon-arrow-right"></i></span></a>
                @else
                <a href="{{route('login')}}" class="dtr-btn dtr-btn-right-icon dtr-mr-5 btn-dark-blue">Masuk<span
                        class="btn-span"><i class="icon-arrow-right"></i></span></a>

                @endif

                @endauth

                @endif
            </div>
            <!-- contact ends -->

            <!-- menu starts-->
            <div class="main-navigation dtr-menu-light">
                <ul class="sf-menu dtr-scrollspy dtr-nav dark-nav-on-load dark-nav-on-scroll">
                    <li> <a class="nav-link px-2 {{Route::currentRouteName() == 'home'? 'ctm-active': ''}}"
                            href="{{route('home')}}">Beranda</a> </li>
                    <li> <a class="nav-link px-2 {{Route::currentRouteName() == 'wisata'? 'ctm-active': ''}}"
                            href="{{route('wisata')}}">Lokasi</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="index.html">Jawa Timur</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">Malang</a>
                                    </li>
                                    <li>
                                        <a href="#">Surabaya</a>
                                    </li>
                                    <li>
                                        <a href="#">Probolinggo</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="index02.html">Jawa Tengah</a>
                            </li>
                            <li>
                                <a href="index02.html">Jawa Barat</a>
                            </li>

                        </ul>
                    </li>
                    <li> <a class="nav-link px-2 {{Route::currentRouteName() == 'paket'? 'ctm-active': ''}}"
                            href="{{route('paket')}}">Paket</a> </li>
                    <li> <a class="nav-link px-2 {{Route::currentRouteName() == 'about'? 'ctm-active': ''}}"
                            href="{{route('about')}}">Tentang</a> </li>
                </ul>
            </div>
            <!-- menu ends -->

        </div>
        <!-- header right ends -->

    </div>
</header>
<!-- header ends
================================================== -->
