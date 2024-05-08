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

    <div class="form-group col-md-6">
        <span class="text-gray-700 dark:text-gray-400">Nome da Placa</span>
        <input type="text" class="form-control" placeholder="Digita o nome Placa" name="nome"
            value="{{ isset($placa->nome) ? $placa->nome : old('nome') }}" required />
    </div>
    <div class="form-group col-md-6">
        <span class="text-gray-700 dark:text-gray-400">Localização da Placa</span>
        <input type="text" class="form-control" placeholder="Digita a localização" name="localizacao"
            value="{{ isset($placa->localizacao) ? $placa->localizacao : old('localizacao') }}" required />
    </div>
    <div class="form-group col-md-12">
        <span class="text-gray-700 dark:text-gray-400">Descrição da placa</span>
        <textarea name="descricao" id="descricao" placeholder="Digita os descricao" class="form-control" cols="30"
            rows="10" required>{{ isset($placa->descricao) ? $placa->descricao : old('descricao') }}</textarea>

    </div>

    <div class="col-md-4"></div>
    <div class="form-group col-md-4 d-flex justify-content-center">
        <button type="submit" class="btn btn-lg btn-primary text-white">
            {{ isset($placa) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>
