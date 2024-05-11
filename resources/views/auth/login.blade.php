
@extends('layouts.auth.auth')
@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo text-center">
                                <div>
                                    <a class="navbar-brand brand-logo" href="/">
                                        <img class="img-fluid" src="/dist/assets/images/logo.png" alt="logo" />
                                    </a>
                                </div>
                            </div>
                            <h4>Olá, vamos começar a nossa viagem</h4>
                            <h6 class="fw-light">Entre com os seus dados</h6>
                            
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        id="exampleInputEmail1" placeholder="E-mail" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Senha" value="{{ old('password') }}"
                                        required>
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn"
                                        href="{{ route('login') }}"
                                        onclick="event.preventDefault();this.closest('form').submit();">ENTRAR</button>
                                </div>
                                <div
                                    class="my-2
                                        d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Manter me conectado </label>
                                    </div>
                                    {{-- <a href="#" class="auth-link text-black">Esqueceu a Senha?</a> --}}
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
