  <!-- Offcanvas area start -->
  <div class="fix">
      <div class="offcanvas__info">
          <div class="offcanvas__wrapper">
              <div class="offcanvas__content">
                  <div class="offcanvas__top d-flex justify-content-between align-items-center">
                      <div class="offcanvas__logo">
                          <a href="{{ route('beranda') }}">
                              <img src="{{ asset('assets/front-new/img/logo-octanet.png') }}" alt="logo not found"
                                  width="120px">
                          </a>
                      </div>
                      <div class="offcanvas__close">
                          <button>
                              <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 1.22656L36 35.7266" stroke="#D4212F" stroke-width="1.6662" />
                                  <path d="M1.5 35.7266L36 1.22656" stroke="#D4212F" stroke-width="1.6662" />
                              </svg>
                          </button>
                      </div>
                  </div>
                  <div class="mobile-menu fix mb-5"></div>
                  <div class="flex justify-end gap-1 mb-7">
                      <a href="{{route('keagenan')}}">
                          <div class="btn btn-dark flex">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                  <path fill="currentColor"
                                      d="M11 17h2v-6h-2zm1-8q.425 0 .713-.288T13 8t-.288-.712T12 7t-.712.288T11 8t.288.713T12 9m0 13q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
                              </svg>
                              Info Keagenan
                          </div>
                      </a>
                      <a href="{{ route('login') }}">
                          <div class="btn btn-danger flex">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                  <path fill="currentColor"
                                      d="M15 3H9a3 3 0 0 0-3 3v4h1V6a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2v-4H6v4a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3M3 12h10.25L10 8.75l.66-.75l4.5 4.5l-4.5 4.5l-.66-.75L13.25 13H3z" />
                              </svg>
                              Masuk
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="offcanvas__overlay"></div>
  <div class="offcanvas__overlay-white"></div>
  <!-- Offcanvas area start -->
  <header>
      <div class="header-main-wrapper">
          <div class="header-top-area header-top-area-bg">
              <div class="container">
                  <div class="header-top-wrapper">
                      <div class="header-top-right gap-1 flex items-center">
                          <div>
                              <h5 class="text-white py-2 text-sm">Mau Jadi Agen OCTAnet?</h5>
                          </div>
                          <a href="{{route('keagenan' ,'#daftar-agen')}}" class="text-center">
                              <div class=" bg-black text-white rounded-2xl text-sm font-medium  w-[140px]">Daftar
                                  Sekarang</div>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          <div id="header-sticky" class="header-area-1 header-bottom-bg-white">
              <div class="container">
                  <div class="row align-items-center flex justify-between">
                      <div class="col-xl-2 col-lg-4 col-md-12">
                          <div class="header__left d-flex">
                              <div class="header__logo">
                                  <a href="{{route('beranda')}}">
                                      <img src="{{ asset('assets/front-new/img/logo-octanet.png') }}"
                                          alt="image not found" width="120px">
                                  </a>
                              </div>
                              <div class="header__menu d-flex align-items-center">
                                  <h5 class="header__menu-text is-black p-relative sidebar_open_btn">Menu</h5>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-7 col-lg-4 col-md-4">
                          <div class="header-nav-item-wrapper">
                              <div class="main-menu d-none d-xl-block">
                                  <nav id="mobile-menu" style="display: block; ">
                                      <ul class="is-black">
                                          <li class="has-dropdown">
                                              <a href="{{route('beranda')}}">Beranda</a>
                                          </li>
                                          <li><a href="{{route('tentang')}}">Tentang Kami</a>
                                          </li>
                                          <li class="has-mega-menu">
                                              <a href="{{route('price')}}">Layanan & Harga</a>
                                          </li>
                                          <li class="has-mega-menu">
                                              <a href="{{route('berita-artikel')}}" data-value="Blog & Artikel">Blog &
                                                  Artikel</a>
                                          </li>
                                          <li class="has-dropdown">
                                              <a href="#" data-value="Lainnya">Lainnya</a>
                                              <ul class="sub-menu">
                                                  <li> <a href="#">Speedtest</a>
                                                  </li>
                                                  <li> <a href="#">Pengaturan Jaringan</a>
                                                  </li>
                                                  <li> <a href="#">Company Profile</a>
                                                  </li>
                                              </ul>
                                          </li>
                                      </ul>
                                  </nav>
                              </div>
                          </div>

                      </div>
                      <div class="col-xl-3 col-lg-4 col-md-4 btn-login">
                          <div class="bottom-header-right-info gap-2">
                              <a href="{{route('keagenan')}}">
                                  <div class="btn btn-dark flex">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                          viewBox="0 0 24 24">
                                          <path fill="currentColor"
                                              d="M11 17h2v-6h-2zm1-8q.425 0 .713-.288T13 8t-.288-.712T12 7t-.712.288T11 8t.288.713T12 9m0 13q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
                                      </svg>
                                      Info Keagenan
                                  </div>
                              </a>
                              <a href="{{route('login')}}">
                                  <div class="btn btn-danger flex">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                          viewBox="0 0 24 24">
                                          <path fill="currentColor"
                                              d="M15 3H9a3 3 0 0 0-3 3v4h1V6a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2v-4H6v4a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3M3 12h10.25L10 8.75l.66-.75l4.5 4.5l-4.5 4.5l-.66-.75L13.25 13H3z" />
                                      </svg>
                                      Masuk
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>