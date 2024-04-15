<!-- 2 BUGS
      QUANDO PREENCHE LETRAS AO INVÉS DE NÚMEROS DA ERRO
      QUANDO COLOCA VIRGULA AO INVES DE PONTO DA ERRO 
-->
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo IMC</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Scribble&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="principal">
      <h1>Calcule seu IMC</h1>
      <main>
        <form method="get" action="#resultado">
            <label for="peso">PESO(KG)</label>
            <input type="text" id="peso" name="peso" placeholder="Qual o seu peso?(kg)" required/>
            <label for="altura">ALTURA(M)</label>
            <input type="text" id="altura" name="altura" placeholder="Qual é a sua altura?(m)" required/>
            <button type="submit">ENVIAR</button>
        <?php
          require_once('controlador/calculoimc.php');
          require_once('visao/rodape.php');
        ?>