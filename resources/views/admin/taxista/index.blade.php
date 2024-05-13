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
                        <div class="border pt-4 px-3 text-center align-items-center">
                            <form class="d-sm-flex align-items-center justify-content-between row"
                                action="{{ route('pdf.taxistas') }}" method="POST" target="_blank">
                                @csrf
                                <div class="form-group col-md-4">
                                    De:
                                    <input type="date" name="start" id="start" class="form-control" required>
                                </div>
                                <div class="form-group col-md-4">
                                    Para:
                                    <input type="date" name="end" id="end" class="form-control" required>
                                </div>
                                <div class="form-group col-md-4 btn-wrapper">
                                    <button type="submit"class="btn btn-primary text-white me-0">
                                        <i class="icon-download"></i>
                                        Imprimir
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="container">
                                <div class="container grid px-6 mx-auto">
                                    <h2 class="my-6 text-2xl font-semibold text-gray-700">
                                        Listas dos Taxistas
                                    </h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                    <th>Número de Bilhete</th>
                                                    <th>Gênero</th>
                                                    <th scope="col">Data de Nascimento</th>
                                                    <th scope="col">Número de Telefone</th>
                                                    <th scope="col">Placa</th>
                                                    <th scope="col">Documento</th>
                                                    <th>Impressão Digital</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($taxistas as $taxista)
                                                    <tr>
                                                        <td class="text-sm">{{ $loop->index + 1 }}</td>
                                                        <td class=" text-sm">
                                                            {{ $taxista->nome }}
                                                        </td>
                                                        <td class=" text-sm">
                                                            {{ $taxista->ndebi }}
                                                        </td>
                                                        <td class=" text-sm">
                                                            {{ $taxista->genero }}
                                                        </td>
                                                        <td class=" text-sm">
                                                            {{ $taxista->data }}
                                                        </td>
                                                        <td class=" text-sm">
                                                            {{ $taxista->numerotelefone }}
                                                        </td>
                                                        <td class="text-sm">
                                                            {{ $taxista->placa->nome }}
                                                        </td>
                                                        <td class="text-sm">
                                                            <a href="{{ route('admin.pdf.taxistaDoc',$taxista->id) }}" class="btn btn-primary btn-sm text-white">
                                                                <i class="icon-download"></i>
                                                                BI
                                                            </a>
                                                        </td>
                                                        <td>{{ $taxista->codigo }}

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
                                                                                href="{{ route('admin.taxistas.edit', $taxista->id) }}">Editar</a>
                                                                        </div>
                                                                        <div class="dropdown-divider"></div>
                                                                        <form
                                                                            action="{{ route('admin.taxistas.destroy', $taxista->id) }}"
                                                                            method="POST" class="dropdown-item">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="dropdown-item delete-button">
                                                                                Remover
                                                                            </button>
                                                                        </form>
                                                                        @if($taxista->estado==0)
                                                                    <a class="dropdown-item delete-button"
                                                        href="{{ route('admin.taxistas.muda_estado', ['id'=>$taxista->id,'estado'=>1]) }}">Habilitar Leitura </a>
                                                                    @else
                                                                    <a class="dropdown-item delete-button"
                                                    href="{{ route('admin.taxistas.muda_estado', ['id'=>$taxista->id,'estado'=>0]) }}">Desabilitar Leitura </a>
                                                                    @endif
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
