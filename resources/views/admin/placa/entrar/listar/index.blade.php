@extends('layouts.merge.direita')
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
                                    <h2 class="my-6 text-2xl font-semibold text-gray-700">
                                        Lista dos Taxistas Vinculados
                                    </h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%"
                                            cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="px-4 py-3">Nome de Taxista</th>
                                                    
                                                    <th class="px-4 py-3">Número de Bilhete</th>
                                                   
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($taxistas as $taxista)
                                                    <tr>
                                                        <td class="text-sm">{{ $loop->index + 1 }}</td>
                                                        
                                                        <td class="px-4 py-3 text-sm">
                                                       
                                                        
                                                            {{ $taxista->nome }}
                                                         
                                                        </td>
                                                       
                                                        <td class="px-4 py-3 text-sm">
                                                        
                                                            {{ $taxista->nome }}
                                                         
                                                           
                                                        </td>
                                                       
                                                        
                                                       
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
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
