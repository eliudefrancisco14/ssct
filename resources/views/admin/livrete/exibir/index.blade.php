@extends('layouts.merge.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Dados da Viatura</h1>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-12">


                                        <div class="row justify-content-between mb-4">
                                            <div class="col-12 col-md-6 col-lg-6 mt-5 ml-5">
                                                <h2 class="h3 page-title">
                                                    Matrícula: {{ $livrete->matricula }}
                                                </h2>
                                            </div>
                                            {{-- <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                                                <a href="{{ route('admin.livretes.edit', $livretes->id) }}"
                                                    class="btn btn-md btn-primary shadow-sm text-end">Editar</a>
                                            </div> --}}
                                        </div>


                                        <div class="row align-items-center">

                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Modelo da Viatura</b>
                                                </h5>
                                                <p class="text-dark">{{ $livrete->modelo }}</p>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Número de Motor</b>
                                                </h5>
                                                <p class="text-dark">{{ $livrete->ndemotor }}</p>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Serviço</b>
                                                </h5>
                                                <p class="text-dark">{{ $livrete->servico }}</p>
                                            </div>
                                           
                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Livrete</b>
                                                </h5>
                                                <a href="{{ route('admin.pdf.livreteDoc', $livrete->id) }}" target="_blank">
                                                    <i class="menu-icon mdi mdi-download mdi-48px"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-7 mb-2">
                                                <hr>
                                                <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $livrete->created_at }}
                                                </p>
                                                <p class="mb-1 text-dark"><b>Última Actualização</b>
                                                    {{ $livrete->updated_at }}
                                                </p>

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
    </div>
@endsection
