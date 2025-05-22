<x-app-layout>
    @push('styles')
    <style>
        .is-invalid {
            color: red;
        }
    </style>
    @endpush

    <section class=" pt-[126px] pb-5 bg-slate-200">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-5">
                    <div class="login-signup-wrap p-5 gray-light-bg rounded-xl shadow">
                        <div class="login-signup-header text-center">
                            <h3 class="mb-5">Agen Resmi Octanet.id</h3>
                        </div>

                        <form action="{{route('login')}}" method="post" class="login-signup-form">
                            @csrf
                            <div class="form-group mb-4">
                                <!-- Label -->
                                <label class="pb-2"> Email Address </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <input type="email" name="email" required="" class="form-control"
                                        placeholder="Masukan email">
                                </div>
                                @if ($errors->any())
                                <div>
                                    @foreach ($errors->all() as $error)
                                    <div class=" is-invalid mt-1">{{ $error }}</div>
                                    @endforeach
                                </div>
                                @endif
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <!-- Label -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="pb-2"> Password </label>
                                    <a href="">Lupa
                                        Password?</a>
                                </div>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                    <input type="password" name="password" required="" class="form-control"
                                        placeholder="Masukan password">
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="d-grid">
                                <button type="submit" value="login"
                                    class="btn bg-red-500 hover:bg-red-600 mt-4 mb-3 text-white">
                                    Masuk
                                </button>
                            </div>
                        </form>
                        <!-- <div class="other-login-signup my-3">
            <div class="or-login-signup text-center">
              <strong>Or Login With</strong>
            </div>
          </div>
          <ul class="list-inline social-login-signup text-center">
            <li class="list-inline-item my-1">
              <a href="#" class="btn btn-facebook"><i class="fab fa-facebook-f pr-1"></i> Facebook</a>
            </li>
            <li class="list-inline-item my-1">
              <a href="#" class="btn btn-google"><i class="fab fa-google pr-1"></i> Google</a>
            </li>
            <li class="list-inline-item my-1">
              <a href="#" class="btn btn-twitter"><i class="fab fa-twitter pr-1"></i> Twitter</a>
            </li>
          </ul> -->
                        <p class="text-center mt-2">
                            Tertarik menjadi Agen? <a href="sign-up.html"
                                class="font-semibold hover:text-red-600">Daftar Sekarang</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>