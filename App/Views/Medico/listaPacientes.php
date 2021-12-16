<header>
		<?php require_once('Views/Layouts/menuMedico.php'); ?>
</header>
<div style="height:95%; width:100%" >
<div style="display: table; width:100%;  height:15%;" >
            <div  style="display: table-cell; background: #fff; width:100%; height:100%; color: #ffffff; text-align:left; vertical-align:middle">

<div class="row" style="color:#000000">
    <div class="col">
    <h1>Pacientes</h1>
    </div>

</div>
</div>
</div>
<div style="padding:2%">
    <table class="table table-hover" >
    <thead>
        <tr>
        <th >Paciente</th>
        <th >Cedula</th>
        </tr>
    </thead>
    <tbody>
    
    
    <?php 
    foreach($dataCitas as $dataCita){
        $pacienteNombre = $cita->obtenerNombrePaciente($dataCita["id_paciente"]);
        $pacienteApellido = $cita->obtenerApellidoPaciente($dataCita["id_paciente"]);
        $cedula = $cita->obtenerCedulaPaciente($dataCita["id_paciente"]);
        $paciente = $pacienteNombre.' '.$pacienteApellido;
        ?>

        <tr>
        <th><?php echo $paciente ?></th>
        <td><?php echo $cedula ?></td>
        </tr>
    
    <?php
    }
    ?>

    </tbody>
    </table>
</div>
</div>
<?php require_once('Views/Layouts/footer.php');?>