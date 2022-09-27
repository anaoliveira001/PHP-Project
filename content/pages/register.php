<h1>Register</h1>
<form action="db/register.php" method="post">
  <div class="mb-3">
    <label for="form-username" class="form-label">Username</label>
    <input type="text" class="form-control" id="form-username" name="form-username" required>
  </div>
  <div class="mb-3">
    <label for="form-password1" class="form-label">Password</label>
    <input type="password" class="form-control" id="form-password1" name="form-password1" required>
  </div>
  <div class="mb-3">
    <label for="form-password2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="form-password2" name="form-password2" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<?php 
//VALIDA SE RECEBE CÓDIGO DE RESULTADO E APRESENTA ALERT CONSOANTE O MESMO//VALIDA SE RECEBE CÓDIGO DE ERRO E APRESENTA ALERT CONSOANTE O ERRO
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'missingdata'){ ?>

    <div class="alert alert-danger" role="alert">
      Preencha todos os campos para se registar
    </div>

    <?php
  }else if($r == 'pwerror'){ ?>
    
    <div class="alert alert-danger" role="alert">
      Passwords não correspondem
    </div>

    <?php
  }else if($r == 'usernoexist'){
    ?>
    
    <div class="alert alert-danger" role="alert">
      Username já existe
    </div>
    
    <?php
  } 
}
?>