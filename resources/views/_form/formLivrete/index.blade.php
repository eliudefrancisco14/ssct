@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="row">
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Taxista</span>
        <select name="taxista_id" class="form-control" required>
            <option value=""> --Selecione o taxista</option>
            @foreach ($taxistas as $taxista)
                <option value="{{ $taxista->id }}">{{ $taxista->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Matrícula da Viatura</span>
        <input type="text" class="form-control" placeholder="Digita a Matrícula" name="matricula1"
            value="{{ isset($livretes->matricula1) ? $livretes->matricula1 : old('matricula1') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Modelo da Viatura</span>
        <input type="text" class="form-control" placeholder="Digita o" name="modelo1"
            value="{{ isset($livretes->modelo1) ? $livretes->modelo1 : old('modelo1') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Marca da Viatura</span>
        <input type="text" class="form-control" placeholder="Digita o" name="marca1"
            value="{{ isset($livretes->marca1) ? $livretes->marca1 : old('marca1') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Número de Motor</span>
        <input type="text" class="form-control" placeholder="Digita o" name="ndemotor1"
            value="{{ isset($livretes->ndemotor1) ? $livretes->ndemotor1 : old('ndemotor1') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Cor da Viatura</span>
        <input type="text" class="form-control" placeholder="Digita o" name="cor1"
            value="{{ isset($livretes->cor1) ? $livretes->cor1 : old('cor1') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Medidas Pneumáticos</span>
        <input type="text" class="form-control" placeholder="Digita o" name="medidaspneus"
            value="{{ isset($livretes->medidaspneus) ? $livretes->medidaspneus : old('medidaspneus') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Peso Bruto</span>
        <input type="text" class="form-control" placeholder="Digita o" name="pesobruto"
            value="{{ isset($livretes->pesobruto) ? $livretes->pesobruto : old('pesobruto') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Distancia entre Eixos</span>
        <input type="text" class="form-control" placeholder="Digita o" name="dentreixos"
            value="{{ isset($livretes->dentreixos) ? $livretes->dentreixos : old('dentreixos') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Serviço</span>
        <input type="text" class="form-control" placeholder="Digita o" name="servico"
            value="{{ isset($livretes->servico) ? $livretes->servico : old('servico') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Cilindrada</span>
        <input type="text" class="form-control" placeholder="Digita o" name="cilindrada"
            value="{{ isset($livretes->cilindrada) ? $livretes->cilindrada : old('cilindrada') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Número de Quadros</span>
        <input type="text" class="form-control" placeholder="Digita o" name="ndequadro1"
            value="{{ isset($livretes->ndequadro1) ? $livretes->ndequadro1 : old('ndequadro1') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Lotação</span>
        <input type="number" class="form-control" placeholder="Digita o" name="lotacao"
            value="{{ isset($livretes->lotacao) ? $livretes->lotacao : old('lotacao') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Tara</span>
        <input type="text" class="form-control" placeholder="Digita o" name="tara"
            value="{{ isset($livretes->tara) ? $livretes->tara : old('tara') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Tipo de Caixa</span>
        <input type="text" class="form-control" placeholder="Digita o" name="tipodecaixa"
            value="{{ isset($livretes->tipodecaixa) ? $livretes->tipodecaixa : old('tipodecaixa') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Combustível</span>
        <input type="text" class="form-control" placeholder="Digita o" name="combustivel"
            value="{{ isset($livretes->combustivel) ? $livretes->combustivel : old('combustivel') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Número de Cilindros</span>
        <input type="text" class="form-control" placeholder="Digita o" name="ndecilindros"
            value="{{ isset($livretes->ndecilindros) ? $livretes->ndecilindros : old('ndecilindros') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Data do Primeiro Registro</span>
        <input type="date" class="form-control" name="dataregistro"
            value="{{ isset($livretes->dataregistro) ? $livretes->dataregistro : old('dataregistro') }}" required />
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-4 d-flex justify-content-center">
        <button type="submit" class="btn btn-lg btn-primary text-white">
            {{ isset($livretes) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>
