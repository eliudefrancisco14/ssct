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
        <input type="text"
            class="form-control"
            placeholder="Digita a Matrícula" name="matricula" value="{{ isset($livretes->matricula)? $livretes->matricula : old('matricula') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Modelo da Viatura</span>
        <input type="text"
            class="form-control"
            placeholder="Digita o" name="modelo" value="{{ isset($livretes->modelo)? $livretes->modelo : old('modelo') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Número de Motor</span>
        <input type="text"
            class="form-control"
            placeholder="Digita o" name="ndemotor" value="{{ isset($livretes->ndemotor)? $livretes->ndemotor : old('ndemotor') }}" required />
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Serviço</span>
        <input type="text"
            class="form-control"
            placeholder="Digita o" name="servico" value="{{ isset($livretes->servico)? $livretes->servico : old('servico') }}" required />
    </div>
    <div class="form-group col-md-4">

        <label for="documentos" class="form-label required">Documentos da
            Viatura</label>
        <input type="file" name="documentos" id="documentos" class="form-control" value="{{ old('documentos') }}">
    </div>

    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Proprietário da Viatura</span>
        <select class="form-control" name="proprietario" required>
            <option value=""> --Selecione um opção</option>
            <option value="Sim">Sim</option>
            <option value="Nao">Não</option>
        </select>
    </div>



    <div class="col-md-4"></div>
    <div class="form-group col-md-4 d-flex justify-content-center">
        <button type="submit" class="btn btn-lg btn-primary text-white">
            {{ isset($livretes) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>
