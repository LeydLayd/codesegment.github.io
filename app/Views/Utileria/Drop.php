<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <?php 
    $user = session()->getFlashdata('Usuario');
    
    echo $user['Nombre_usuario']; ?>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Perfil</a></li>
    <li><a class="dropdown-item" href="#">Cerrar sesion</a></li>
  </ul>
</div>