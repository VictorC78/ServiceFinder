<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 
<style>
  .login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 100vh;
}

.login-form, .signup-form {
  background-color: #f5f5f5;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
}

.signup-form {
  display: none;
}

h2 {
  margin-top: 0;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 5px;
}

input {
  margin-bottom: 10px;
  padding: 5px;
  border-radius: 3px;
  border: none;
}

button {
  padding: 10px;
  border-radius: 3px;
  border: none;
  background-color: #4285f4;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

</style>
  
</head>
<body>

<?php
include('navbar.php');
?>
  
  <div class="login-container">
    <div>
      <button class="login-btn">Entrar</button>
      <button class="signup-btn">Cadastro</button>
    </div> <br> <br>
  <div class="login-form">
    <h2>Entrar</h2>
    <form>
      <label for="username">Usuário:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Senha:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Entrar</button>
    </form>
  </div>
  <div class="signup-form">
    <h2>Cadastro</h2>
    <form>
      <label for="fullname">Nome completo:</label>
      <input type="text" id="fullname" name="fullname" required>
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>
      <label for="new-username">Novo usuário:</label>
      <input type="text" id="new-username" name="new-username" required>
      <label for="new-password">Nova senha:</label>
      <input type="password" id="new-password" name="new-password" required>
      <button type="submit">Cadastrar</button>
    </form>
  </div>
</div>


  <script>
const loginForm = document.querySelector('.login-form');
const signupForm = document.querySelector('.signup-form');
const loginBtn = document.querySelector('.login-btn');
const signupBtn = document.querySelector('.signup-btn');

loginBtn.addEventListener('click', () => {
  loginForm.style.display = 'block';
  signupForm.style.display = 'none';
});

signupBtn.addEventListener('click', () => {
  signupForm.style.display = 'block';
  loginForm.style.display = 'none';
});

  </script>
</body>
</html>