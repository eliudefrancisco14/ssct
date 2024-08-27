<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensor Biométrico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        h1 {
            margin-top: 50px;
            color: #333;
        }
        #resultado {
            margin-top: 20px;
            font-size: 18px;
            color: #444;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        button:focus {
            outline: none;
        }
        button:active {
            transform: translateY(1px);
        }
    </style>
</head>
<body>
    <h1>Impressão Digital</h1>

    <div id="resultado"></div>

    <button onclick="cadastrar()">Cadastrar Impressão</button>
    <button onclick="ler()">Ler Impressões Cadastradas</button>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function cadastrar() {
            var numero = prompt("Por favor, escolha um número entre 1 e 62:");
            if (numero !== null && numero !== "") {
                if (numero >= 1 && numero <= 127) {
                    // Requisição AJAX real usando Axios
                    var dados = {
                        numero: numero,
                        impressao: "Dados da impressão digital" // Substitua esta string pelos dados reais da impressão digital
                    };
                    // Substitua a URL pela rota correspondente em seu backend Laravel
                    axios.get('/api/impressao/cadastrar', dados)
                        .then(function (response) {
                            document.getElementById('resultado').innerText = response.data.mensagem;
                        })
                        .catch(function (error) {
                            console.error('Erro ao cadastrar impressão:', error);
                        });
                } else {
                    alert("Por favor, escolha um número válido entre 1 e 127.");
                }
            }
        }

        function ler() {
            // Fazer uma solicitação AJAX para ler as impressões cadastradas no sensor biométrico
            axios.get('/api/impressao/reconhecer')
                .then(function (response) {
                    document.getElementById('resultado').innerText = 'Impressões cadastradas: ' + response.data.impressoes.join(', ');
                })
                .catch(function (error) {
                    console.error('Erro ao ler impressões:', error);
                });
        }
    </script>
</body>
</html>
