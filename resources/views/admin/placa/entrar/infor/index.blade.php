@extends('layouts.merge.direita')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Dados da Placa</h1>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-12">


                                        <div class="row justify-content-between mb-4">
                                            <div class="col-12 col-md-6 col-lg-6 mt-5 ml-5">
                                                <h2 class="h3 page-title">
                                                    Nome do Presidente: {{ $placa->presidente }}
                                                </h2>
                                            </div>
                                          
                                        </div>


                                        <div class="row align-items-center">

                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Nº do BI do Presidente</b>
                                                </h5>
                                                <p class="text-dark">{{ $placa->bipresidente }}</p>
                                            </div>
                                           
                                            
                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Número de telefone </b>
                                                </h5>
                                                <p class="text-dark">{{ $placa->numpresidente }}</p>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Nome da Placa</b>
                                                </h5>
                                                <p class="text-dark">{{ $placa->nome }}</p>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Localização</b>
                                                </h5>
                                                <p class="text-dark">{{ $placa->localizacao }}</p>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                                <h5>
                                                    <b class="mb-1">Descrição</b>
                                                </h5>
                                                <p class="text-dark">{{ $placa->descricao }}</p>
                                            </div>
                                          
                                          

                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-7 mb-2">
                                                <hr>
                                                <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $placa->created_at }}
                                                </p>
                                                <p class="mb-1 text-dark"><b>Última Actualização</b>
                                                    {{ $placa->updated_at }}
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
