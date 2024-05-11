<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de logs-{{ date('d/m/Y', strtotime(now())) }}</title>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background: #ffffff;
            color: #1d1d1d;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        header {
            text-align: center;
            padding: 1.5rem;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="text-center">SSCT</div>
        <div class="text-center">SISTEMA DE SUBVENÇÃO DE COMBUSTÍVEL</div>
        <div class="text-center">LISTA DE LOG DE ATIVIDADES</div>
        <div class="text-center">FILTRO DE "{{ $start }}" ATÉ "{{ $end }}"</div>

        <br>
    </header>


    <main>
        <div class="main">
            @if ($logs->count() <= 0)
                <hr>
                <div class="text-center"> Não Existe nenhum log salvo" </div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>USER_ID</th>
                            <th class="text-left">USER_NAME</th>
                            <th>IP</th>
                            <th class="text-left">MENSAGEM</th>
                            <th class="text-center">DATA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $item)
                            <tr class="text-center text-dark">
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
            @endif
        </div>
    </main>
    <hr class="pylarge bg-dark">
    <footer class="col-12 mt-2 text-center" id="footer">

        <small class="text-left text-dark">
            Documento Processado por Computador. <br>
        </small>
        <small class="text-right text-dark">
            Data de Processo: {{ date('d/m/Y H:i:s', strtotime(now())) }}
        </small>

    </footer>


</body>

</html>
