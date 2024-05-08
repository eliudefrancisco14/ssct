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
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ isset($taxista->nome)? $taxista->nome : old('nome')  }}">
    </div>
    <div class="form-group col-md-4">
        <label for="ndebi">Número de BI</label>
        <input type="text" class="form-control" name="ndebi" id="ndebi" value="{{ isset($taxista->ndebi)? $taxista->ndebi : old('ndebi')  }}">
    </div>
    <div class="form-group col-md-4">
        <label for="genero">Gênero</label>
        <select class="form-control" name="genero" id="genero">
            <option value="">  --Selecione o Gênero</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino"> Feminino</option>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="data">Data de Nascimento</label>
        <input type="date" class="form-control" name="data" id="data" value="{{ isset($taxista->data)? $taxista->data : old('data')  }}">
    </div>
    <div class="form-group col-md-4">
        <label for="numerotelefone">Número de Telefone</label>
        <input type="text" class="form-control" name="numerotelefone" id="numerotelefone" value="{{ isset($taxista->numerotelefone)? $taxista->numerotelefone : old('numerotelefone')  }}">
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">Placa</span>
        <select name="placa_id" class="form-control" required>
            <option value=""> --Selecione o Placa</option>
            @foreach ($placas as $placa)
                <option value="{{ $placa->id }}">{{ $placa->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="documentos">Documentos</label>
        <input type="file" class="form-control" name="documentos" id="documentos" value="{{ old('documentos')  }}">
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    
    <div class="form-group col-md-4 d-flex justify-content-center">
        <button type="submit" class="btn btn-lg btn-primary text-white">
            {{ isset($taxista) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

