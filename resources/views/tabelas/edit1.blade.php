@extends('app')
          @section('content')
          <div class="container">
            <form action="{{route('buttons-update', ['id'=>$taxistas->id])}}"   method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <div class="form-group">
                  <label for="nome">Nome</label>
             <input type="text" class="form-control" name="nome" value="{{$taxistas->nome}}">
                </div>
                     <div class="form-group">
                  <label for="ndebi">Número de B.I</label>
            <input type="text"  class="form-control" name="ndebi"  value="{{$taxistas->ndebi}}">
                    </div>
                    <div class="form-group">
                  <label for="genero">Género</label>
                  <select name="genero" id="genero">
                <option value="">Feminino</option>
                <option value="">Masculino</option>
                <option value="">Não Defino</option>
                  </select>
                  <input type="text" class="form-control" name="genero" value="{{$taxistas->genero}}">
                </div>
                <div class="form-group">
                  <label for="data">Data de Nascimento</label>
                  <input type="date"  class="form-control" name="data" value="{{$taxistas->data}}">
                </div>
                <div class="form-group">
                  <label for="numerotelefone">Número de Telefone</label>
                  <input type="number"  class="form-control" name="numerotelefone" value="{{$taxistas->numerotelefone}}">
                </div>
                <br>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
              </div>
            </form>
          </div>
          @endsection