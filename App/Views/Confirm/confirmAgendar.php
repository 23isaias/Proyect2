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
    <h3>Su cita ha sido agendada exitosamente.</h3>
    <p>Se le ha enviado un correo con los datos de su cita.</p>
    <a href="?controller=Cita&&action=mostrar">Aceptar</a>
</section>