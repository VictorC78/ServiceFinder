<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <style>
    .container-xxl {
      height: 60vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container-a {
      width: 70%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;



    }

    .b-container {
      width: 50%;
      height: 100%;



    }

    span {
      background: linear-gradient(to right, rgb(18, 138, 243), rgb(5, 209, 250));

    }

 
  .container-xxl-2 {
    height: 60vh;
    display: none;
    justify-content: center;
    align-items: center;
  }
  .b-container-2 {
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 50%;
    height: 100%;
  }
    #entrar,
    #cadastrar {
      width: 100px;
      height: 50px;
      border-radius: 30px;
      background: linear-gradient(to right, rgb(18, 138, 243), rgb(5, 209, 250));
      color: white;
      font-weight: bold;
      border: 3px solid black;
    }

    #entrar:hover {
      background: white;
      color: black;
    }

    #cadastrar:hover {
      background: white;
      color: black;
    }
    .logo{
      width: 50%;
      height: 50%;
    }
  </style>

</head>

<body>

  <?php
  include('navbar.php');
?>
  <br><br><br><br><br><br>
  <div style="display: flex; justify-content: center; align-items: center; gap: 10px; ">
    <button id="cadastrar" onclick="trocar2()">Cadastro</button>
    <button id="entrar" onclick="trocar()">Login</button>
  </div>
  <br>
  <div id="div1" class="container-xxl">
    <div class="container-a">
      <form class="b-container">

        <div class="input-group mb-3">
          <span style="color: white;" class="input-group-text" id="basic-addon1">E-mail</span>
          <input type="text" class="form-control" placeholder="exemplo@gmail.com" aria-label="Username"
            aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <span style="color: white;" class="input-group-text" id="basic-addon2">Usuário</span>
          <input type="text" class="form-control" placeholder="usuario_00" aria-label="Recipient's username"
            aria-describedby="basic-addon2">
        </div>


        <div class="input-group mb-3">
          <span style="color: white;" class="input-group-text" id="basic-addon3">Estado</span>
          <select class="form-select" id="estado" onchange="mostrarCidades()" aria-label="Default select example">
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
          <span style="color: white;" class="input-group-text" id="basic-addon3">Cidade</span>
          <select class="form-select" id="cidade" aria-label="Default select example">
            <option selected>Selecione...</option>
            <option value="1" data-estado="pe">Cedro</option>
            <option value="2" data-estado="pe">Salgueiro</option>
            <option value="3" data-estado="ce">Jardim</option>
            <option value="4" data-estado="rn">Natal</option>
            <option value="5" data-estado="rn">Mossoró</option>
          </select>
        </div>



        <div class="input-group mb-3">
          <span style="color: white;" class="input-group-text">Senha</span>
          <input type="password" class="form-control" placeholder="123..." aria-label="Server">
        </div>
        <div class="input-group mb-3">
          <span style="color: white;" class="input-group-text">Confirmar Senha</span>
          <input type="password" class="form-control" placeholder="123..." aria-label="Server">
        </div>

        <div class="input-group mb-3">
          <button style="background-color: black; color: white;" type="reset" class="btn btn-primary">Limpar</button>
          <button style="background: linear-gradient(to right, rgb(0, 97, 154), rgb(18, 138, 243), rgb(5, 209, 250));;"
            type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
      <div
        style="display:flex;flex-direction: column; justify-content: space-around; align-items: center;z-index:1; width: 50%; height: 100%;background:linear-gradient(to right, rgb(0, 97, 154), rgb(18, 138, 243), rgb(5, 209, 250)); margin-left:0;"
        class="container">
        <h3 style="color: white;">Bem vindo!</h3>
        <img src="Imagens/LogoServiceFinder.png" class="logo" alt="...">
        <h5 style="color: white;">Faça agora seu cadastro e crie seu perfil</h5>

      </div>

    </div>
  </div>



  <div class="container-xxl-2">
    <div class="container-a">
      <div
      style="display:flex;flex-direction: column; justify-content: space-around; align-items: center;z-index:1; width: 50%; height: 100%;background:linear-gradient(to right, rgb(0, 97, 154), rgb(18, 138, 243), rgb(5, 209, 250)); margin-left:0;"
      class="container">
      <h1 style="color: white;">Olá de novo!</h1>
      <img src="Imagens/LogoServiceFinder.png" class="logo" alt="...">
      <h5 style="color: white;">Mantenha-se conectado</h5>

      </div>
      <form class="b-container-2">

        <div  style="width:50%;" class="input-group mb-3">
          <span style="color: white;" class="input-group-text"  id="basic-addon1">E-mail</span>
          <input type="text" class="form-control" placeholder="Digite seu e-mail..." aria-label="Username" aria-describedby="basic-addon1">
        </div>



        <div style="width:50%;" class="mb-3">
          <div class="input-group">
            <span style="color: white;" class="input-group-text"  id="basic-addon3">Senha</span>
            <input type="password" class="form-control" placeholder="Digite sua senha..." id="basic-url" aria-describedby="basic-addon3 basic-addon4">
          </div>

        </div>


        <div style="display:flex; justify-content:center; align-items: center;" class="input-group mb-3">

          <button style="background: linear-gradient(to right, rgb(0, 97, 154), rgb(18, 138, 243), rgb(5, 209, 250));;"
            type="submit" class="btn btn-primary">Enviar</button>
        </div>
        <div style="width: 100%;display:flex; justify-content:center; align-items: center; gap:20px"
          class="container-3-apps">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-google"
            viewBox="0 0 16 16">
            <path
              d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-facebook"
            viewBox="0 0 16 16">
            <path
              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-apple"
            viewBox="0 0 16 16">
            <path
              d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
            <path
              d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
          </svg>
        </div>
      </form>

    </div>
  </div>
  <br>
  <script>
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

    //Executa o click para trocar os formulários

    function trocar() {
      var login = document.querySelector('.container-xxl-2');
      var cadastro = document.querySelector('.container-xxl');

      cadastro.style.opacity = '0'; // Definindo a opacidade do elemento para 0
      cadastro.style.transition = 'opacity 0.2s'; // Definindo a transição de opacidade para durar 0.5s

      setTimeout(function () {
        // ocultar o elemento de cadastro
        cadastro.style.display = 'none';

        // exibir o elemento de login
        login.style.opacity = '1'; // Definindo a opacidade do elemento para 1
        login.style.display = 'flex';
        login.style.transition = 'opacity 0.2s'; // Definindo a transição de opacidade para durar 0.5s
      }, 500);
    }

    function trocar2() {
      var login2 = document.querySelector('.container-xxl-2');
      var cadastro2 = document.querySelector('.container-xxl');

      login2.style.opacity = '0'; // Definindo a opacidade do elemento para 0
      login2.style.transition = 'opacity 0.5s'; // Definindo a transição de opacidade para durar 0.5s

      setTimeout(function () {
        // ocultar o elemento de login
        login2.style.display = 'none';

        // exibir o elemento de cadastro
        cadastro2.style.opacity = '1'; // Definindo a opacidade do elemento para 1
        cadastro2.style.display = 'flex';
        cadastro2.style.transition = 'opacity 0.5s'; // Definindo a transição de opacidade para durar 0.5s
      }, 500);
    }





  </script>
</body>

</html>