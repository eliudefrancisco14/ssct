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
    width: 500px;
    border-radius: 25px;
    box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.450);
    
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
   width: 200px;;
   height:35px;
}




    </style>
</head>
<body>
     
<main> 
 <section id="cadastropuro">

   

   <div id="cadastrar">
 <div class="header">
     <p>Criar o seu cadastro</p>
     <a href="{{route('admin.dashboard')}}">Entar</a>
 </div>
     
     

   </div>
 </section>
</main>
    
</body>
</html>