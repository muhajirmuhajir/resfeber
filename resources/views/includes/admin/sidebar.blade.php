<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="{{Route::currentRouteName() == 'admin.dashboard' ? 'mm-active' : ''}}"><a
                    href="{{route('admin.dashboard')}}" class="ai-icon " aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="{{Route::currentRouteName() == 'admin.tempat-wisata.index' ? 'mm-active' : ''}}"><a
                    href="{{route('admin.tempat-wisata.index')}}"
                    class="ai-icon {{Route::currentRouteName() == 'admin.tempat-wisata.index' ? 'mm-active' : ''}}"
                    aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Tempat Wisata</span>
                </a>
            </li>
            <li class="{{Route::currentRouteName() == 'admin.paket-wisata.index' ? 'mm-active' : ''}}"><a
                    href="{{route('admin.paket-wisata.index')}}"
                    class="ai-icon {{Route::currentRouteName() == 'admin.paket-wisata.index' ? 'mm-active' : ''}}"
                    aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Paket Wisata</span>
                </a>
            </li>
            <li><a href="travel.html" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Travel</span>
                </a>
            </li>
            <li><a href="transaksi.html" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Transaksi</span>
                </a>
            </li>

        </ul>

        <div class="copyright">
            <p><strong>Resfeber Admin Dashboard</strong> © 2020 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by Me</p>
        </div>
    </div>
</div>
