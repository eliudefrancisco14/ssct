@extends('layouts.merge.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview"
                                    role="tab" aria-controls="overview" aria-selected="true">Painel</a>
                            </li>

                        </ul>
                        <div>
                            {{-- <div class="btn-wrapper">
                                <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i>
                                    Imprimir</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="container">
                                <div class="container grid px-6 mx-auto">
                                    <div class="header">
                                        <h2 class="my-6 text-2xl font-semibold text-gray-700">
                                            Editar livrete
                                        </h2>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="{{ route('admin.livretes.update', ['id' => $livretes->id]) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                @include('_form.formLivrete.index')

                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
