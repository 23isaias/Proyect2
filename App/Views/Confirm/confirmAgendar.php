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
<section id="confirm">
<div class="alert alert-primary mt-3" role="alert">
    <h3>Su cita ha sido agendada exitosamente.</h3>
    <p>Se le ha enviado un correo con los datos de su cita.</p>
    </div>
    <img class="img-fluid rounded mx-auto d-block" src="\ProySIGMED\App\imagen\css.png" alt="sigmed" style="height:100%">
    <div style="display: flex; justify-content:center">
    <a class="btn btn-outline-primary" href="?controller=Cita&&action=mostrar">Pulse para Ver los Detalles de su Cita</a>
</section>