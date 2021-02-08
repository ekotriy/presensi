@extends('frontend')

@section('section')
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-5 col-lg-6 col-md-9">

    <div class="card o-hidden border-0  my-3">
        <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
            <div class="px-5 py-3">
                <div class="text-center">
                <h3 class="absensi m-0">absensi</h3>
                </div>
                <div class="row justify-content-center">
                <span class="text-logo mb-4"> <img src="{{ url('frontend/img/logo.svg') }}" alt="" class="logo pb-2">PEGaway</span>
                </div>
                <form class="user" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Ketik username" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control form-control-user" id="password" placeholder="Ketik password" name="password" >
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="toggle()">
                    <label class="form-check-label showp" for="exampleCheck1">Lihat Password</label>
                </div>
                <button class="btn btn-purple  btn-block mb-2" name="submit" type="submit">Log In</button>
                </form>
                <div class="text-center mt-4">
                <p class="cs">Untuk bantuan hubungi CS Kejar.id <a href="#">di sini</a></p>
                </div>
                <div class="branding text-center">
                <p>Aplikasi ini merupakan produk teaching factory <br> SMKN 2 Nganjuk dengan CV IDS. </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    </div>

</div>
@endsection