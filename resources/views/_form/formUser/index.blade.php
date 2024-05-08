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
        <span class="text-gray-700 dark:text-gray-400">Nome</span>
        <input class="form-control" type="text" name="name"
            value="{{ isset($user->name) ? $user->name : old('name') }}" required/>
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">E-mail</span>
        <input class="form-control" type="email" name="email"
            value="{{ isset($user->email) ? $user->email : old('email') }}" required/>
    </div>
    <div class="form-group col-md-4">
        <span class="text-gray-700 dark:text-gray-400">BI</span>
        <input class="form-control" type="text" name="nbi"
            value="{{ isset($user->nbi) ? $user->nbi : old('nbi') }}" required/>
    </div>
    <div class="form-group col-md-6">
        <span class="text-gray-700 dark:text-gray-400">Palavra-Passe</span>
        <input type="password" class="form-control" placeholder="Digite a palavra Passe" name="password"
         required/>
    </div>
    <div class="form-group col-md-6">
        <span class="text-gray-700">Nível de Acesso</span>
        <Select class="form-control" name="funcao">
            <option value="">  --Selecione o nível de acesso</option>
            <option value="Administrador">Administrador</option>
            <option value="Operador">Operador</option>
        </Select>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-4 d-flex justify-content-center">
        <button type="submit" class="btn btn-lg btn-primary text-white">
            {{ isset($user) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>
