@extends('app')
          @section('content')
          <div class="container">
            <form action="{{route('tables-update', ['id'=>$titulos->id])}}"   method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <div class="form-group">
                  <label for="ndequadro">Números de Quadros</label>
             <input type="text" class="form-control" name="ndequadro" value="{{$titulos->ndequadro}}">
                </div>
                     <div class="form-group">
                  <label for="nometitular">Nome de Titular</label>
         <input type="text"  class="form-control" name="nometitular"  value="{{$titulos->nometitular}}">
                    </div>
                    <div class="form-group">
                  <label for="ndebi">Número de B.I</label>
                  <input type="text"  class="form-control" name="ndebi" value="{{$titulos->nbedi}}">
                </div>
                <div class="form-group">
                  <label for="ndemotor">Número de Motor</label>
                  <input type="text"  class="form-control" name="ndemotor" value="{{$titulos->ndemotor}}">
                </div>
                <div class="form-group">
                  <label for="dataemissao">Data de Emissão</label>
                  <input type="date"  class="form-control" name="dataemissao" value="{{$titulos->dataemissao}}">
                </div>
                <div class="form-group">
                  <label for="cor">Cor</label>
                  <input type="text"  class="form-control" name="cor" value="{{$titulos->cor}}" >
                </div>
                <div class="form-group">
                  <label for="matricula">Matrícula</label>
                  <input type="text"  class="form-control" name="matricula" value="{{$titulos->matricula}}">
                </div>
                <div class="form-group">
                  <label for="marca">Marcas</label>
                  <input type="text"  class="form-control" name="marca" value="{{$titulos->marca}}">
                </div>
                <br>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
              </div>
            </form>
          </div>
          @endsection