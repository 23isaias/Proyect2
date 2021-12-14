<?php if($_COOKIE['tipoUser'] === 1){ ?>
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
<section id="confirm">
    <h3>Su cita ha sido cancelada exitosamente.</h3>
    <p>Se le ha enviado una notificación a su correo.</p>
    <a href="?controller=Cita&&action=mostrar">Aceptar</a>
</section>