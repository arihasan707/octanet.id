<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="index.html" class="sidebar-logo">
            <img src="{{ asset('assets/front/img/icons/logo-octanet.png') }}" alt="site logo" class="light-logo">
            <img src="assets/images/logo-light.png" alt="site logo" class="dark-logo">
            <img src="assets/images/logo-icon.png" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li>
                <a href="{{route('agen.dashboard')}}" class="{{request()->is('agen/dashboard') ? 'active-page' : ''}}">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-menu-group-title active">Main Menu</li>
            <li>
                <a href="{{route('agen.pelanggan') }}"
                    class="{{request()->is('agen/pelanggan/*') ? 'active-page' : ''}}">
                    <iconify-icon icon="material-symbols:person-outline" class="menu-icon"></iconify-icon>
                    <span>Pelanggan</span>
                </a>
            </li>
            <li>
                <a href="{{route('agen.pencairanDana')}}">
                    <iconify-icon icon="hugeicons:money-bag-02" class="menu-icon"></iconify-icon>
                    <span>Pencairan Dana</span>
                </a>
            </li>
            <li>
                <a href="{{route('agen.bank')}}" class="{{request()->is('agen/bank/*') ? 'active-page' : '' }}">
                    <iconify-icon icon="material-symbols:home-outline" class="menu-icon"></iconify-icon>
                    <span>Bank Transfer</span>
                </a>
            </li </ul>
    </div>
</aside>