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

            <a class="logo-defaults dtr-scroll-links" href="{{route('home')}}"><img
                    src="{{url('frontpage/assets/images/logo-dark.png')}}" alt="logo"></a>

            {{-- <!-- logo on scroll -->
            <a class="logo-alts dtr-scroll-links" href="{{route('home')}}"><img
                src="{{url('frontpage/assets/images/logo-dark.png')}}" alt="logo"></a>
            <!-- logo on scroll ends --> --}}

        </div>
        <!-- header left ends -->

        <!-- header right starts -->
        <div class="dtr-header-right ml-auto d-flex flex-row-reverse align-items-center">

            <!-- contact starts -->
            <div class="dtr-header-contact dtr-ml-50 position-relative" x-data="{ open: false }">
                @if (Route::has('login'))
                @auth
                <a @click.prevent="open = true">
                    <img style="width: 50%; height: auto;" src="{{url('frontpage/assets/images/ic-profile.png')}}"
                        alt="" srcset="">
                </a>
                <div class="bg-white rounded p-3 mt-2 pop-up-menu" x-show="open" @click.away="open=false">
                    <a href="{{route('profile')}}" class="d-block">Profile</a>
                    <a href="{{route('transaksi')}}" class="d-block">Transaksi</a>
                    @if (auth()->user()->role === 3)
                    <a href="{{route('admin.dashboard')}}" class="d-block">Dashboard</a>
                    @endif
                    <form action="{{route('logout')}}" method="post" id="logout_form">
                        @csrf
                        <button type="submit" class="btn btn-link d-block w-100 px-0 text-left"
                            style="color: red;">Logout</button>
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
                    @if (Route::currentRouteName() != 'checkout')
                    <li> <a class="nav-link px-2 {{Route::currentRouteName() == 'home'? 'ctm-active': ''}}"
                            href="{{route('home')}}">Beranda</a> </li>
                    <li> <a class="nav-link px-2 {{Route::currentRouteName() == 'wisata'? 'ctm-active': ''}}"
                            href="{{route('wisata')}}">Wisata</a>
                    </li>
                    <li> <a class="nav-link px-2 {{Route::currentRouteName() == 'travel'? 'ctm-active': ''}}"
                            href="{{route('travel')}}">Travel</a> </li>
                    @endif
                    <li> <a class="nav-link px-2 {{Route::currentRouteName() == 'about'? 'ctm-active': ''}}"
                            href="{{route('about')}}">Tentang</a> </li>
                    @auth
                    <li> <a class="nav-link px-2 d-md-none d-block {{Route::currentRouteName() == 'profile'? 'ctm-active': ''}}"
                            href="{{route('profile')}}">Profile</a> </li>
                    <li> <a class="nav-link px-2 d-md-none d-block {{Route::currentRouteName() == 'transaksi'? 'ctm-active': ''}}"
                            href="{{route('transaksi')}}">Transaksi</a> </li>
                    @if (auth()->user()->role === 3)
                    <li> <a class="nav-link px-2 d-md-none d-block {{Route::currentRouteName() == 'admin.dashboard'? 'ctm-active': ''}}"
                            href="{{route('admin.dashboard')}}">Dashboard</a> </li>
                    @endif
                    <a href="#" onclick="document.getElementById('logout_form').submit()"
                        class="d-md-none d-block dtr-btn dtr-btn-right-icon mx-2 p-2 mb-2 dtr-mr-5 btn-danger text-white">Logout<span
                            class="btn-span"><i class="icon-arrow-right"></i></span></a>
                    @endauth
                    @guest
                    <a href="{{route('register')}}"
                        class="d-md-none d-block dtr-btn dtr-btn-right-icon mx-2 p-2 mb-2 dtr-mr-5 btn-dark-blue text-white">Daftar</a>
                    <a href="{{route('login')}}"
                        class="d-md-none d-block dtr-btn dtr-btn-right-icon mx-2 p-2 mb-2 dtr-mr-5 btn-outline-primary"
                        style="color: #1e247e;">Masuk</a>
                    @endguest
                </ul>
            </div>
            <!-- menu ends -->

        </div>
        <!-- header right ends -->

    </div>
</header>
<!-- header ends
================================================== -->
