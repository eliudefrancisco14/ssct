<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Matriculados-{{ date('d/m/Y', strtotime(now())) }}</title>
    <style>
       *{
margin: 0;
padding: 0;
}*


body{
    overflow: hidden;
}
.content{

    margin: auto;
    width: 100%;
    height: 120vh;
    
  
    
}
h1{
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    padding-bottom: 0.5em;
    color:#2C748A;
    font-size:larger ;
}
h2{
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    padding-bottom: 0.5em;
    color:#2C748A;
    margin-top: 10px;
}
.img{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
   

}
.img>img{

    width: 120px;

}
#img1{
    display: flex;
    opacity: 0.6;
    
}
.content>#img1>img{
    width: 12em;
    margin: auto;
    
}
.dados{
    margin: auto;
    background-color: #1a4881ea;
    border-radius: 15px;
    width: 30em;
    height: 21vh;
    padding-top: 15px;
    padding: 15px;

}
.dados>p{
    color: white;
    font-weight: bold;
    font-weight: 700;
    font-family: Arial, Helvetica, sans-serif;
    padding-bottom:  20px;
}


    </style>
</head>

<body>
     <div class="container" style="background-image: url('images/image_icon.jpg')"> 
        <div class="content"> 
         <div class="img"> <img src="images/ANATA.jpg" alt="" >
          <h1> ASSOCIAÇÃO NOVA ALIANÇA DOS TAXISTAS DE ANGOLA </h1>
         </div>
          <div id="img1"><img src="images/image_icon.jpg" alt=""></div>
          <h2> INFORMAÇÕES :</h2>
         <div class="dados">
          <p>NOME :</p>
          <P>Nº BI:</P>
          <p>MATRÍCULA :</p>
          <p>FUNÇÃO : TAXISTA</p>
         </div>
     </div>
</body>


</html>
