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
                                        Listas dos Livretes
                                    </h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Taxista</th>
                                                    <th>Matrícula da Viatura</th>
                                                    <th>Modelo dA Viatura</th>
                                                    <th>Marca da Viatura</th>
                                                    <th>Número de Motor</th>
                                                    <th>Cor da Viatura</th>
                                                    <th>Medidas dos Pneumáticos</th>
                                                    <th>Peso Bruto</th>
                                                    <th>Distancia entre Eixos</th>
                                                    <th>Serviço</th>
                                                    <th>Cilindrada</th>
                                                    <th>Número de Quadros</th>
                                                    <th>Lotação</th>
                                                    <th>Tara</th>
                                                    <th>Tipo de Caixa</th>
                                                    <th>Combustível</th>
                                                    <th>Número de Cilindros</th>
                                                    <th>Data do Primeiro Registro</th>
                                                    <th>Ações</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($livretes as $livrete)
                                                    <tr>
                                                        <td class="text-sm">{{ $loop->index + 1 }}</td>
                                                        <td>
                                                            {{ $livrete->taxista->nome }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->nome }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->matricula1 }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->modelo1 }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->marca1 }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->ndemotor1 }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->cor1 }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->medidaspneus }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->pesobruto }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->dentreixos }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->servico }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->cilindrada }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->ndequadro1 }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->lotacao }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->tara }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->tipocaixa }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->combustivel }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->ndecilindros }}
                                                        </td>
                                                        <td>
                                                            {{ $livrete->dataregistro }}
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
                                                                                href="{{route('admin.livretes.edit',['id'=>$livrete->id])}}">Editar</a>
                                                                        </div>
                                                                        <div class="dropdown-divider"></div>
                                                                        <form
                                                                            action="{{ route('admin.livretes.destroy', $livrete->id) }}"
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
