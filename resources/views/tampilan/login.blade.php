@extends('layout.tampilanlogs')
@section('data')
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">
            <br><br><br>
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-5 d-none d-lg-block">
                            <img src="{{ asset('images\profilsekolah\logo.jpg') }}" class="img-fluid rounded-start"
                                alt="Halaman Sekolah">
                        </div>
                        <div class="col">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Selamat datang!</h1>
                                </div>
                                @if (session('loginError'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('loginError') }}
                                        <div type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></div>
                                    </div>
                                @endif
                                <form action="{{ route('oten') }}" method="POST" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email"
                                            class="form-control form-control-user @error('email') is-invalid @enderror"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address..." value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password"
                                            class="form-control form-control-user @error('password') is-invalid @enderror
                                        "
                                            id="exampleInputPassword" placeholder="Password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
