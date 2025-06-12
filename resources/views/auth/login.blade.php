<x-app-layout>
    @push('styles')
    <style>
        .is-invalid {
            color: red;
        }
    </style>
    @endpush

    <x-bradcrumb title="Kelola Akunmu">
        <div>Masuk</div>
    </x-bradcrumb>

    <div class="login-area is-bottom pt-120 x-clip">
        <div class="container">
            <div class="login-main-wrapper">
                <div class="login-content-wrapper">
                    <div class="section-title mb-30">
                        <h3 class="login-title mb-20 bdFadeBottom"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                            Agen Resmi OCTAnet</h3>
                        <p class="bdFadeBottom"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                            Lengkapi data berikut untuk masuk ke akun kamu
                        </p>
                    </div>
                    <div class="login-input-wrapper">
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="contact-from-input bdFadeBottom"
                                style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                                <label>Nomor Telepon<span>*</span></label>
                                <input type="text" name="email" placeholder="Masukan nomor telepon"
                                    fdprocessedid="7wvj4o" required>
                                @if ($errors->any())
                                <div>
                                    @foreach ($errors->all() as $error)
                                    <div class=" is-invalid mt-1">{{ $error }}</div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            <div class="contact-from-input bdFadeBottom"
                                style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                                <label>Password<span>*</span></label>
                                <input type="password" name="password" placeholder="Masukan password"
                                    fdprocessedid="7fnkqq">
                            </div>
                            <div
                                class="checkbox-wrapper sign-flex checkbox d-flex align-items-center justify-content-end mb-25">
                                <div class="ak-input-password bdFadeBottom"
                                    style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                                    <a href="#" class="forgotpassword">Lupa Password</a>
                                </div>
                            </div>
                            <div class="bdFadeBottom"
                                style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                                <button class="unfill-btn button w-100 mb-25" type="submit"
                                    fdprocessedid="p1v21m">Login</button>
                            </div>
                            <div class="login-no-account bdFadeBottom"
                                style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                                <span>Tertarik Menjadi Agen? <a href="signup.html">Daftar Sekarang</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>