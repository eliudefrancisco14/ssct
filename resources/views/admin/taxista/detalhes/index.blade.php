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
                                <h1 class="h3 mb-0 text-gray-800">Detalhes</h1>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-12">


                                        <div class="row justify-content-between mb-4">
                                            <div class="col-12 col-md-6 col-lg-6 mt-5 ml-5">
                                                <h2 class="h3 page-title">
                                                    Nome: {{ $taxista->nome }}
                                                </h2>
                                            </div>
                                            {{-- <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                                                <a href="{{ route('admin.taxista.edit', $taxista->id) }}"
                                                    class="btn btn-md btn-primary shadow-sm text-end">Editar</a>
                                            </div> --}}
                                        </div>


                                        <div class="row align-items-center">

                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Nº do BI</b>
                                                </h5>
                                                <p class="text-dark">{{ $taxista->ndebi }}</p>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Gênero</b>
                                                </h5>
                                                <p class="text-dark">{{ $taxista->genero }}</p>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Data de Nascimento</b>
                                                </h5>
                                                <p class="text-dark">{{ $taxista->data }}</p>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Número de telefone </b>
                                                </h5>
                                                <p class="text-dark">{{ $taxista->numerotelefone }}</p>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Placa</b>
                                                </h5>
                                                <p class="text-dark">{{ $placa->nome }}</p>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Documento</b>
                                                </h5>
                                                <a href="{{ route('admin.pdf.taxistaDoc', $taxista->id) }}" target="_blank">
                                                    <i class="menu-icon mdi mdi-download mdi-48px"></i>
                                                </a>
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
                                                <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $taxista->created_at }}
                                                </p>
                                                <p class="mb-1 text-dark"><b>Última Actualização</b>
                                                    {{ $taxista->updated_at }}
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
