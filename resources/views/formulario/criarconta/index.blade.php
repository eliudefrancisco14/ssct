<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="diferente.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>SSCT</title>
    <style>
      @charset "UTF-8";
*{
  font-family: 'monospace', monospace;
   padding: 0px;
   margin: 0px;
   box-sizing:border-box;
}
body, html{
    background-color:#35AFDB;
   height: 100vh;
   width: 100vw;
   
   
}
main{
  position: relative;
    height: 100vh;
    width: 100vw;
}
section#cadastropuro {
   display: flex;
   flex-direction: row;
    position:absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    height:600px;
    width: 1000px;
    border-radius: 25px;
    box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.450);
}

section#cadastropuro > div#imagem{
 background-image: url(../assets/img/furmo.jpg);
    background-size: cover;
   height:600px; 
   width: 350px; 
   border-radius:25px 0px 0px 25px;

}
section#cadastropuro > div#cadastrar {
padding: 10px;
padding-left: 35px;


}
form{
   width:100%;  
   margin-left: 35px;
   
}

#cadastrar > h1 {
  /* padding-left: 35px;*/
   margin-left:90px;
}
input{
   width:460px;
   height:40px;
}




    </style>
</head>
<body>
     
<main> 
 <section id="cadastropuro">
<div id="imagem">

</div>
   

   <div id="cadastrar">
     <h1>Criar uma conta</h1>
     <p></p>
     <form action="funcional.php" method="POST">


        <div class="form-group">
        <label for="name">Nome Completo</label><br>
        <input type="text" name="name" id="name" placeholder="Seu Nome Completo" class="form-control"><br>  
        </div>

        <div class="form-group">
        <label for="email">Email</label><br>
        <input type="email"name="email"  placeholder="O seu Email " class="form-control"><br>    
        </div>

        <div class="form-group">
        <label for="password">Palavra Passe</label><br>
        <input type="password" name="password" id="passord" class="form-control"><br>
        </div>

        <div class="form-group">
        <label for="funcao">Função</label><br>
        <input type="text" name="funcao" id="funcao" class="form-control"><br>
        </div>

        <div class="form-group">
        <label for="nbi">Número de B.I</label><br>
        <input type="text" name="nbi" id="nbi" class="form-control"><br>
        </div>

        <input type="submit" value="Salvar" class="btn btn-primary">
       

            </form>

   </div>
 </section>
</main>
    
</body>
</html>