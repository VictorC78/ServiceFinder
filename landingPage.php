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
   body {
    background-image: url('https://media.istockphoto.com/id/1298988320/pt/foto/silver-platinum-metal-abstract-defocused-background.jpg?s=612x612&w=0&k=20&c=ozg_nZiCP_ig1LmEiIjgqnpJGS_6Ia_j1nu2zfqTgD0=');
    background-repeat: no-repeat;
    background-size: cover;
}

    .search{
        width: 100%;
        height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
   
</style>
    
</head>
<body>
    <?php
  include('navbar.php');
    ?>

      <div class="search">
        <button id="encontrar" onclick="encontrar()" style="z-index: 2;" href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Encontrar serviço</button>
      </div>

     
  <form id="form" style="display: none; flex-direction: column; justify-content:center; align-items:center;" action="">
  <div style="width: 80%;" class="input-group mb-3">
    <label style="background-color: rgb(18, 138, 243); border: 2px solid black; font-weight: 400; color: white;" class="input-group-text" for="inputGroupSelect01">Estado</label>
      <select style="border: 2px solid black;" class="form-select" id="estado" onchange="mostrarCidades()" aria-label="Example select with button addon">
        <option selected>Selecione...</option>
        <option value="pe">Pernambuco</option>
        <option value="ce">Ceará</option>
        <option value="rn">Rio Grande do Norte</option>
      </select>
</div>
<div style="width: 80%;" class="input-group mb-3">
  <label style="background-color: rgb(18, 138, 243); border: 2px solid black; font-weight: 400; color: white;" class="input-group-text" for="inputGroupSelect01">Cidade</label>
  <select style="border: 2px solid black;" class="form-select" id="cidade" aria-label="Example select with button addon">
    <option selected>Selecione...</option>
    <option value="1" data-estado="pe">Cedro</option>
    <option value="2" data-estado="pe">Salgueiro</option>
    <option value="3" data-estado="ce">Jardim</option>
    <option value="4" data-estado="rn">Natal</option>
    <option value="5" data-estado="rn">Mossoró</option>
  </select>
</div>
<div style="width: 80%;" class="input-group mb-3">
    <label style="background-color: rgb(18, 138, 243); border: 2px solid black; font-weight: 400; color: white;" class="input-group-text" for="inputGroupSelect02">Serviço</label>
  <select  style="border: 2px solid black;" class="form-select" id="inputGroupSelect02">
    <option selected>Selecione...</option>
    <option value="1">Comida</option>
    <option value="2">Roupas</option>
    <option value="3">Mercados</option>
  </select>
</div>

</form>
<script>
//Mostra o formulário de pesquisa ao clicar no botão

function encontrar() {
  var minhaDiv = document.getElementById("form");
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