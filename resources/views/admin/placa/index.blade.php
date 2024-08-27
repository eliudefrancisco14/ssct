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
                                    <h2 class="my-6 text-2xl font-semibold text-gray-700">
                                        Listas dos Placas
                                    </h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Placa</th>

                                                    <th>Presidente</th>
                                                    <th>B.I do Presidente</th>
                                                    <th>Número do Presidente</th>
                                                    <th>Localização</th>
                                                    <th>Descrição</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($placas as $placa)
                                                    <tr>
                                                        <td class="text-sm">{{ $loop->index + 1 }}</td>
                                                        <td>
                                                          <a class="text-dark text-decoration-none" href="{{ route('admin.placas.entrar', ['id'=>$placa->id]) }}"> {{ $placa->nome }}</a> 
                                                        </td>
                                                        <td>
                                                            {{ $placa->presidente }}
                                                        </td>
                                                        <td>
                                                            {{ $placa->bipresidente }}
                                                        </td>
                                                        <td>
                                                            {{ $placa->numpresidente }}
                                                        </td>
                                                       
                                                        <td>
                                                            {{ $placa->localizacao }}
                                                        </td>
                                                        <td>
                                                            {{ $placa->descricao }}
                                                        </td>
                                                        
                                                        <td>
                                                            <div class="dropdown mb-4">

                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-primary btn-sm dropdown-toggle text-white"
                                                                        type="button" id="dropdownMenuSizeButton3"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false"> </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuSizeButton3">
                                                                        <div class="dropdown-item">
                                                                            <a class="dropdown-item"
                                                                                href="{{route('admin.placas.edit',['id'=>$placa->id])}}">Editar</a>
                                                                        </div>
                                                                        <div class="dropdown-divider"></div>
                                                                        <form
                                                                            action="{{ route('admin.placas.destroy', $placa->id) }}"
                                                                            method="POST" class="dropdown-item">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="dropdown-item delete-button">
                                                                                Remover
                                                                            </button>
                                                                        </form>
                                                                        {{--  <a class="dropdown-item delete-button"
                                                                            href="{{ route('taxista.destroy', $taxista->id) }}">
                                                                            Remover
                                                                        </a> --}}
                                                                        <div class="dropdown-divider"></div>
                                                                        
                                                                    </div>
                                                                </div>

                                                            </div>
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
