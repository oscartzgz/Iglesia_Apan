<?php
  session_start();
  unset($_SESSION['usuario']);
  session_destroy();
?>
<?php include('parciales/header.php') ?>
<div class="container">
  <div class="row">
    <div class="column col-sm-12 text-center login">
      <br><br>
      <h1>Tu sesión se cerró correctamente</h1>
      <a href="/" class="btn btn-primary btn-large">Inicio</a>
    </div>
  </div>
</div>
<?php include('parciales/footer.php') ?>
