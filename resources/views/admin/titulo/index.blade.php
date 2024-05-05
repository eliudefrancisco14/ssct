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
                                        Listas dos Títulos
                                    </h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%"
                                            cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="px-4 py-3">Nome de Titular</th>
                                                    <th class="px-4 py-3">Matricúla</th>
                                                    <th class="px-4 py-3">Número de Quadros</th>
                                                    <th class="px-4 py-3">Número de Bilhete</th>
                                                    <th class="px-4 py-3">Modelo da Viatura</th>
                                                    <th class="px-4 py-3">Número de Motor</th>
                                                    <th class="px-4 py-3">Data de Emissão</th>
                                                    <th class="px-4 py-3">Cor da Viatura</th>
                                                    <th class="px-4 py-3">Marca da Viatura</th>
                                                    <th class="px-4 py-3">Número de Título</th>
                                                    <th class="px-4 py-3">Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($titulos as $titulo)
                                                    <tr>
                                                        <td class="text-sm">{{ $loop->index + 1 }}</td>
                                                        
                                                        <td class="px-4 py-3 text-sm">
                                                            {{ $titulo->nome }}
                                                        </td>
                                                        <td class="px-4 py-3 text-sm">
                                                            {{ $titulo->matricula1 }}
                                                        </td>
                                                        <td class="px-4 py-3 text-sm">
                                                            {{ $titulo->ndequadro1 }}
                                                        </td>
                                                        <td class="px-4 py-3 text-sm">
                                                            {{ $titulo->ndebi }}
                                                        </td>
                                                        <td class="px-4 py-3 text-sm">
                                                            {{ $titulo->modelo1 }}
                                                        </td>
                                                        <td class="px-4 py-3 text-sm">
                                                            {{ $titulo->ndemotor1 }}
                                                        </td>
                                                        <td class="px-4 py-3 text-sm">
                                                            {{ $titulo->dataemissao }}
                                                        </td>
                                                        <td class="px-4 py-3 text-sm">
                                                            {{ $titulo->cor1 }}
                                                        </td>
                                                        <td class="px-4 py-3 text-sm">
                                                            {{ $titulo->marca1 }}
                                                        </td>
                                                        <td class="px-4 py-3 text-sm">
                                                            {{ $titulo->ndetitulo }}
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
                                                                                href="{{ route('admin.titulos.edit', $titulo->id) }}">Editar</a>
                                                                        </div>
                                                                        <div class="dropdown-divider"></div>
                                                                        <form
                                                                            action="{{ route('admin.titulos.destroy', $titulo->id) }}"
                                                                            method="POST" class="dropdown-item">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="dropdown-item delete-button">
                                                                                Remover
                                                                            </button>
                                                                        </form>
                                                                        {{--  <a class="dropdown-item delete-button"
                                                                            href="{{ route('titulo.destroy', $titulo->id) }}">
                                                                            Remover
                                                                        </a> --}}
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
