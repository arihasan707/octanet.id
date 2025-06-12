<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="index.html" class="sidebar-logo">
            <img src="{{ asset('assets/front/img/icons/logo-octanet.png') }}" width="120px" alt="site logo"
                class="light-logo">
            <img src="assets/images/logo-light.png" alt="site logo" class="dark-logo">
            <img src="assets/images/logo-icon.png" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li>
                <a href="{{route('admin.dashboard')}}"
                    class="{{request()->is('admin/dashboard') ? 'active-page' : ''}}">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="vaadin:hand" class="menu-icon"></iconify-icon>
                    <span>Permintaan</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('admin.req.pelanggan')}}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Pelanggan Baru</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.req.pencairan') }}"><i
                                class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Pencairan Dana</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-group-title active">Data Master</li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="gridicons:product" class="menu-icon"></iconify-icon>
                    <span>Produk</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('admin.product.kategori')}}"><i
                                class="ri-circle-fill circle-icon text-red-600 w-auto"></i>
                            Kategori</a>
                    </li>
                    <li>
                        <a href="{{route('admin.product')}}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Produk List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.area') }}">
                    <iconify-icon icon="bxs:map" class="menu-icon"></iconify-icon>
                    <span>Area Coverage</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.pelanggan')}}">
                    <iconify-icon icon="proicons:person" class="menu-icon"></iconify-icon>
                    <span>Pelanggan</span>
                </a>
            </li>
            <li class="sidebar-menu-group-title active">Tampilan Web Utama</li>
            <li>
                <a href="{{route('admin.banner')}}">
                    <iconify-icon icon="uil:image" class="menu-icon"></iconify-icon>
                    <span>Banner</span>
                </a>
            </li>
        </ul>
    </div>
</aside>