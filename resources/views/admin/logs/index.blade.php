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
                            <form action="{{ route('admin.pdf.log') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        De:
                                        <input type="date" name="start" id="start" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        Para:
                                        <input type="date" name="end" id="end" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="btn-wrapper">
                                            <button type="submit" class="btn btn-primary text-white me-0">
                                                <i class="icon-download"></i>Imprimir
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="container">
                                <div class="container grid px-6 mx-auto">
                                    <h2 class="my-6 text-2xl font-semibold text-gray-700">
                                        Listas de Log de Atividades
                                    </h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">USER_ID</th>
                                                    <th class="text-left">USER_NAME</th>
                                                    <th>IP</th>
                                                    <th class="text-left">MENSAGEM</th>
                                                    <th class="text-center">DATA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($logs as $item)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td class="text-left">{{ $item->USER_ID }} </td>
                                                        <td class="text-left">{{ $item->USER_NAME }} </td>
                                                        <td>{{ $item->REMOTE_ADDR }} </td>
                                                        <td class="text-left">{{ $item->message }} </td>
                                                        <td>{{ $item->created_at }} </td>

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
