<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <?php 
    $session = session();

    $user = $session->Nombre_usuario;
    
    echo $user; ?>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Perfil</a></li>
    <li><a class="dropdown-item" onclick="location.href='Login/Logout'">Cerrar sesion</a></li>
  </ul>
</div>