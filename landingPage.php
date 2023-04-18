<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<style>
  html, body {
  height: 100%;
}



   body {
    margin: 0;
    background-image: linear-gradient(to bottom, #87CEFA, #FFFFFF);

    background-repeat: no-repeat;
    background-size: cover;
}
#encontrar{
  border: 3px solid white;
  background: linear-gradient(to right, rgb(0, 97, 154), rgb(18, 138, 243));
}

#encontrar:hover{
  background: rgb(18, 138, 243);

}
    .search{
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        flex-direction: column;
    }
    #inputSubmit{
      width: 100%;
      text-align: center;
      background:  linear-gradient(to right, rgb(0, 97, 154), rgb(18, 138, 243), rgb(5, 209, 250));
      border-radius: 10px;
      font-weight: bold;
      color: white;
    }
   
</style>
    
</head>
<body>
    <?php
  include('navbar.php');
    ?>

      <div class="search">
      <button id="encontrar" onclick="encontrar()" href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Encontrar serviço</button> <br><br><br>
       <form id="form" style="display: none; width: 20%; flex-direction: column; justify-content:center;" action="">
     <div class="input-group mb-3">
       <label style="background: linear-gradient(to right, rgb(0, 97, 154), rgb(18, 138, 243), rgb(5, 209, 250)); border: 2px solid black; font-weight: 400; color: white;" class="input-group-text" for="inputGroupSelect01">Estado</label>
         <select style="border: 2px solid black;" class="form-select" id="estado" onchange="mostrarCidades()" aria-label="Example select with button addon">
           <option selected>Selecione...</option>
           <option value="ac">Acre</option>
           <option value="al">Alagoas</option>
           <option value="ap">Amapá</option>
           <option value="am">Amazonas</option>
           <option value="ba">Bahia</option>
           <option value="ce">Ceará</option>
           <option value="df">Distrito Federal</option>
           <option value="es">Espírito Santo</option>
           <option value="go">Goiás</option>
           <option value="ma">Maranhão</option>
           <option value="mt">Mato Grosso</option>
           <option value="ms">Mato Grosso do Sul</option>
           <option value="mg">Minas Gerais</option>
           <option value="pa">Pará</option>
           <option value="pb">Paraíba</option>
           <option value="pr">Paraná</option>
           <option value="pe">Pernambuco</option>
           <option value="pi">Piauí</option>
           <option value="rj">Rio de Janeiro</option>
           <option value="rn">Rio Grande do Norte</option>
           <option value="rs">Rio Grande do Sul</option>
           <option value="ro">Rondônia</option>
           <option value="rr">Roraima</option>
           <option value="sc">Santa Catarina</option>
           <option value="sp">São Paulo</option>
           <option value="se">Sergipe</option>
           <option value="to">Tocantins</option>
         </select>
   </div>
   <div class="input-group mb-3">
     <label style="background: linear-gradient(to right, rgb(0, 97, 154), rgb(18, 138, 243), rgb(5, 209, 250)); border: 2px solid black; font-weight: 400; color: white;" class="input-group-text" for="inputGroupSelect01">Cidade</label>
     <select style="border: 2px solid black;" class="form-select" id="cidade" aria-label="Example select with button addon">
       <option selected>Selecione...</option>
       <option value="1" data-estado="pe">Cedro</option>
       <option value="2" data-estado="pe">Salgueiro</option>
       <option value="3" data-estado="ce">Jardim</option>
       <option value="4" data-estado="rn">Natal</option>
       <option value="5" data-estado="rn">Mossoró</option>
     </select>
   </div>
   <div class="input-group mb-3">
       <label style="background: linear-gradient(to right, rgb(0, 97, 154), rgb(18, 138, 243), rgb(5, 209, 250)); border: 2px solid black; font-weight: 400; color: white;" class="input-group-text" for="inputGroupSelect02">Serviço</label>
     <select  style="border: 2px solid black;" class="form-select" id="inputGroupSelect02">
       <option selected>Selecione...</option>
       <option value="1">Comida</option>
       <option value="2">Roupas</option>
       <option value="3">Mercados</option>
     </select>
   </div>
   <div>
    <input id="inputSubmit" type="submit" value ="Encontrar">
   </div>
   
   </form>
   </div>
      

<script>
//Mostra o formulário de pesquisa ao clicar no botão

function encontrar() {
  var myButton = document.getElementById('encontrar');
  var minhaDiv = document.getElementById("form");
  myButton.style.display = "none";
  minhaDiv.style.display = "flex";
}

//Redireciona as cidades para o Estado selecionado
function mostrarCidades() {
  var estadoSelecionado = document.getElementById("estado").value;
  var cidades = document.getElementById("cidade").options;
  
  for (var i = 0; i < cidades.length; i++) {
    if (cidades[i].getAttribute("data-estado") === estadoSelecionado || cidades[i].value === "") {
      cidades[i].style.display = "block";
    } else {
      cidades[i].style.display = "none";
    }
  }
  document.getElementById("cidade").selectedIndex = 0;

}
</script>


      
      
      
</body>
</html>