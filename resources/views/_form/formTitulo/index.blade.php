<div class="row">
    <div class="form-group col-md-6">
        <span class="text-gray-700 dark:text-gray-400">Nome de Titular</span>
        <select name="taxista_id" class="form-control" required>
            <option value="">  --Selecione o Taxista</option>
            @foreach ($taxistas as $taxista)
                <option value="{{ $taxista->id }}">{{ $taxista->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">
        <span class="text-gray-700 dark:text-gray-400">Matricúla</span>
        <select name="livrete_id" class="form-control" required>
            <option value="">  --Selecione o Livrete</option>
            @foreach ($livretes as $livrete)
                <option value="{{ $livrete->id }}">{{ $livrete->matricula1 }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">
        <span class="text-gray-700 dark:text-gray-400">Data de Emissão</span>
        <input class="form-control" type="date" name="dataemissao"
            value="{{ isset($titulo->dataemissao) ? $titulo->dataemissao : old('dataemissao') }}" required/>
    </div>
    <div class="form-group col-md-6">
        <span class="text-gray-700 dark:text-gray-400">Número de Título</span>
        <input type="text" class="form-control" placeholder="" name="ndetitulo"
            value="{{ isset($titulo->ndetitulo) ? $titulo->ndetitulo : old('ndetitulo') }}" required/>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-4 d-flex justify-content-center">
        <button type="submit" class="btn btn-lg btn-primary text-white">
            {{ isset($titulo) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>
