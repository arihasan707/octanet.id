<section class="page-title-area-4 page-title-area-bg p-relative x-clip"
    data-background="{{ asset('assets/front-new/img/banner3-bg-img.png') }}">
    <div class="page-title-bg-overlay"></div>
    <div class="page-title-round-wrapper">
        <div class="page-title-round-left"></div>
        <div class="page-title-round-right"></div>
    </div>
    <div class="container">
        <div class="page-title-content">
            <div class="page-title-wrapper text-center">
                <h5 class="page-sub-title mb-35 bdFadeBottom"
                    style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                    {{ $slot }}
                </h5>
                <h1 class="page-title bdFadeBottom"
                    style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                    {{$title}}
                </h1>
            </div>
        </div>
    </div>
</section>