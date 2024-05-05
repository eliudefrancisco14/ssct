@extends('app')
          @section('content')
          <div class="container">
            <form action="{{route('modals-update', ['id'=>$livretes->id])}}"   method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
      <label for="matricula1">Matricúla</label>
      <input type="text"  class="form-control" name="matricula1" value="{{$livretes->matricula1}}">
    </div>
    <div class="form-group">
      <label for="modelo1">Modelo</label>
      <input type="text"  class="form-control" name="modelo1" value="{{$livretes->modelo1}}"   >
      <div class="form-group">
      <label for="marca1">Marca</label>
      <input type="text"  class="form-control" name="marca1" value="{{$livretes->marca1}}" >
    </div>
    <div class="form-group">
      <label for="ndemotor1">Número de Motor</label>
      <input type="text"  class="form-control" name="ndemotor1" value="{{$livretes->ndemotor1}}" >
    </div>
    <div class="form-group">
      <label for="cor1">Cor</label>
      <input type="text"  class="form-control" name="cor1" value="{{$livretes->cor1}}" >
    </div>
    <div class="form-group">
      <label for="medidaspneus">Medidas Pneumáticos</label>
      <input type="text"  class="form-control" name="medidaspneus" value="{{$livretes->medidaspneus}}">
    </div>
    <div class="form-group">
      <label for="pesobruto">Peso Bruto</label>
      <input type="text"  class="form-control" name="pesobruto"  value="{{$livretes->pesobruto}}">
    </div>
    <div class="form-group">
      <label for="dentreixos">Distancia entre Eixos</label>
      <input type="text"  class="form-control" name="dentreixos" value="{{$livretes->dentreixos}}">
    </div>
    <div class="form-group">
      <label for="servico">Serviço</label>
      <input type="text"  class="form-control" name="servico" value="{{$livretes->servico}}" >
      </div>
      <div class="form-group">
      <label for="cilindrada">Cilindrada</label>
      <input type="text"  class="form-control" name="cilindrada" value="{{$livretes->cilindrada}}">
    </div>
    <div class="form-group">
      <label for="ndequadro1">Número de Quadros</label>
      <input type="text"  class="form-control" name="ndequadro1" value="{{$livretes->ndequadro1}}" >
    </div>
    <div class="form-group">
      <label for="lotacao">Lotação</label>
      <input type="text"  class="form-control" name="lotacao" value="{{$livretes->lotacao}}">
    </div>
    <div class="form-group">
      <label for="tara">Tara</label>
      <input type="text"  class="form-control" name="tara"  value="{{$livretes->tara}}">
    </div>
    <div class="form-group">
      <label for="tipodecaixa">Tipo de Caixa</label>
      <input type="text"  class="form-control" name="tipodecaixa"  value="{{$livretes->tara}}" >
    </div>
    <div class="form-group">
      <label for="tipodecaixa">Tipo de Caixa</label>
      <input type="text"  class="form-control" name="tipodecaixa"  value="{{$livretes->tipodecaixa}}" >
    </div>
    <div class="form-group">
      <label for="combustivel">Combustivél</label>
      <input type="text"  class="form-control" name="combustivel" value="{{$livretes->combustivel}}" >
    </div>
    <div class="form-group">
      <label for="ndecilindro">Número de Cilindro</label>
      <input type="text"  class="form-control" name="ndecilindro" value="{{$livretes->cndecilindro}}"  >
    </div>
    
                <br>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
              </div>
            </form>
          </div>
          @endsection