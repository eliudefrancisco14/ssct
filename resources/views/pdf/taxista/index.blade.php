<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Maticulados-{{ date('d/m/Y', strtotime(now())) }}</title>
    <style>
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
        <div class="img">
            <img src="" alt="">
        </div>
        <div class="text-center">SISTEMA DE SUBVENÇÃO DE COMBUSTÍVEL</div>
        <div class="text-center">LISTA DE TAXISTAS REGISTRADOS</div>
        <div class="text-center">LISTA DE REGISTRO DE ATÉ {{ $data_atual }}</div>
    </header>

    <main>
        <div class="main">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Número de Bilhete</th>
                        <th>Gênero</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Número de Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($taxistas as $item)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td class=" text-sm">
                                {{ $item->nome }}
                            </td>
                            <td class=" text-sm">
                                {{ $item->ndebi }}
                            </td>
                            <td class=" text-sm">
                                {{ $item->genero }}
                            </td>
                            <td class=" text-sm">
                                {{ $item->data }}
                            </td>
                            <td class=" text-sm">
                                {{ $item->numerotelefone }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <hr class="pylarge bg-dark">
    <footer class="col-12 mt-2 text-center" id="footer">

        <small class="text-left text-dark">
            Documento Processado por Computador. <br>
        </small>

    </footer>


</body>

</html>
