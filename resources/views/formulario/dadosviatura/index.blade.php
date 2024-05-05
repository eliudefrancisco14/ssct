<!DOCTYPE html>
<html lang="pt">
@include('layouts._includes.formulario.head') 
<body>

    <div class="main">

        <div class="container">
            <h2>Cadastre se</h2>
            <form method="POST" action="{{route('site.store')}}" id="signup-form" class="signup-form">
                @csrf
                    <h3>
                        <span class="icon"><i class="ti-user"></i></span>
                        <span class="title_text">Dados Pssoais</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Informação Pessoal: </span>
                            <span class="step-number">Step 1 / 4</span>
                        </legend>
                        <div class="form-group">
                            <label for="nome" class="form-label required">Nome Completo</label>
                            <input type="text" name="nome" id="nome" />
                        </div>

                        <div class="form-group">
                            <label for="ndebi" class="form-label required">Número de Bilhete</label>
                            <input type="text" name="ndebi" id="ndebi" />
                        </div>
                        <div class="">
                            <label for="genero">
                             <span >Gênero</span>
                             <select name="genero" id="" type="text" >
                             <option value="">Selecciona...</option>
                             <option value="Masculino">Masculino</option>
                             <option value="Feminino">Feminino</option>
                             </select></label>
                            
                        </div>
                        <div class="form-group">
                            <div class="form-date">
                                <label for="data" class="form-label">Data de Nascimento</label>
                                <div class="form-date-group">
                               <input type="date" name="data" id="data" class="form-control"><br>   
                                </div>
                            </div><br>
                        <div class="form-group">
                            <label for="numerotelefone" class="form-label required">Número de Telefone</label>
                            <input type="text" name="numerotelefone" id="numerotelefone" />
                        </div>

                        <div class="form-group">
                            <label for="documentos">Documentos da Viatura</label>
                            <input type="file" name="documentos" id="documentos">
                        </div>
                        
                    </fieldset>

                    <h3>
                        <span class="icon"><i class="ti-email"></i></span>
                        <span class="title_text">Livretes</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Informação do Livrete: </span>
                            <span class="step-number">Step 2 / 4</span>
                        </legend>
                        
                        <div class="form-group">
                            <label for="matricula1" class="form-label required">Matricula da Viatura</label>
                            <input type="text" name="matricula1" id="matricula1" />
                       
                            <label for="modelo1" class="form-label required">Modelo da Viatura</label>
                            <input type="text" name="modelo1" id="modelo1" />
                        </div>

                        <div class="form-group">
                            <label for="marca1" class="form-label required">Marca da Viatura</label>
                            <input type="text" name="marca1" id="marca1" />
                       
                            <label for="ndemotor1" class="form-label required">Número de Motor</label>
                            <input type="text" name="ndemotor1" id="ndemotor1" />
                        </div>

                        <div class="form-group">
                            <label for="cor1" class="form-label required">Cor da Viatura</label>
                            <input type="text" name="cor1" id="cor1" />
                       
                            <label for="medidaspneus" class="form-label required">Medidas Pneumaticos</label>
                            <input type="text" name="medidaspneus" id="medidaspneus" />
                        </div>
                        <div class="form-group">
                        <label for="pesobruto" class="form-label required">Peso Bruto</label>
                            <input type="text" name="pesobruto" id="pesobruto" />
                       
                            <label for="dentreixos" class="form-label required">Distancia entre Eixos</label>
                            <input type="text" name="dentreixos" id="dentreixos" />
                        </div>


                    </fieldset>

                    <h3>
                        <span class="icon"><i class="ti-star"></i></span>
                        <span class="title_text">Livretes</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Informação do Livrete: </span>
                            <span class="step-number">Step 3 / 4</span>
                        </legend>
                        <div class="form-group">
                            <label for="servico" class="form-label required">Serviço</label>
                            <input type="text" name="servico" id="servico" />
                        
                            <label for="cilindrada" class="form-label required">Cilindrada</label>
                            <input type="text" name="cilindrada" id="cilindrada" />
                        </div>

                        <div class="form-group">
                            <label for="ndequadro1" class="form-label required">Número de Quadro</label>
                            <input type="text" name="ndequadro1" id="ndequadro1" />
                        
                            <label for="lotacao" class="form-label required">Lotação</label>
                            <input type="text" name="lotacao" id="lotacao" />
                        </div>
                        <div class="form-group">
                            <label for="tara" class="form-label required">Tara</label>
                            <input type="text" name="tara" id="tara" />
                        
                            <label for="tipodecaixa" class="form-label required">Tipo de Caixa</label>
                            <input type="text" name="tipodecaixa" id="tipodecaixa" />
                        </div>
                        <div class="form-group">
                            <label for="combustivel" class="form-label required">Combustivel</label>
                            <input type="combustivel" name="combustivel" id="combustivel" />
                        
                            <label for="ndecilindros" class="form-label required">Númerode Cilindros</label>
                            <input type="text" name="ndecilindros" id="ndecilindros" />
                        </div>
                        <div class="form-group">
                            <label for="dataregistro" class="form-label required">Data de Emissão</label>
                            <input type="date" name="dataregistro" id="dataregistro" />
                        </div>
                    </fieldset>

                    <h3>
                        <span class="icon"><i class="ti-credit-card"></i></span>
                        <span class="title_text">Títulos</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Informação do Título: </span>
                            <span class="step-number">Step 4 / 4</span>
                        </legend>
                        <div class="form-group">
                        
                        <div class="form-group">
                            <label for="dataemissao" class="form-label required">Data de Emissão</label>
                            <input type="date" name="dataemissao" id="dataemissao" />
                        </div>

                        <div class="form-group">
                            <label for="ndetitulo" class="form-label required">Número de Título</label>
                            <input type="text" name="ndetitulo" id="ndetitulo" />
                        </div>
                            <div>
                                <button class="btn btn-lg btn-primary">
                                  Cadastrar
                                </button>
                              </div>
                    </fieldset>
            </form>
        </div>

    </div>
    @include('layouts._includes.formulario.footer') 
    <!-- JS -->
   <!-- <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="/vendor/minimalist-picker/dobpicker.js"></script>
    <script src="/js/main.js"></script>-->
</body>
</html>