<?php if($_COOKIE['tipoUser'] === '1'){ ?>
    <header>
        <?php require_once('Views/Layouts/menuPaciente.php'); ?>
    </header>
<?php
} else {?>
    <header>
        <?php require_once('Views/Layouts/menuMedico.php'); ?>
    </header>
<?php
}?>
<div style="height:85%; width:100%" >
<div class="alert alert-primary mt-3" role="alert">
    <h3>Su cita ha sido cancelada exitosamente.</h3>
    <p>Se le ha enviado una notificación a su correo.</p>
    </div>
    <img class="img-fluid rounded mx-auto d-block" src="imagen\css1.png" alt="sigmed" style="height:65%">
    <div style="display: flex; justify-content:center">
    <a class="btn btn-primary" href="?controller=Cita&&action=mostrar">Pulse para Continuar</a>
    </div>  </div>
<?php require_once('Views/Layouts/footer.php');?>