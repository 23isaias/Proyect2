<header>
		<?php require_once('Views/Layouts/menuMedico.php'); ?>
</header>
<div style="height:95%; width:100%" >
<div style="display: table; width:100%;  height:15%;" >
            <div  style="display: table-cell; background: #fff; width:100%; height:100%; color: #ffffff; text-align:left; vertical-align:middle">

<div class="row" style="color:#000000">
    <div class="col">
    <h1>Mi Agenda</h1>
    </div>
    
</div>
</div>
</div>
<div style="padding:2%">
    <table class="table table-hover" >
    <thead>
        <tr>
        <th >ID</th>
        <th >Fecha</th>
        <th >Paciente</th>
        <th >Hora</th>
        <th ></th>
        <th ></th>
        </tr>
    </thead>
    <tbody>
    
    
    <?php 
    foreach($dataCitasM as $dataCita){
        $pacienteNombre = $cita->obtenerNombrePaciente($dataCita["id_paciente"]);
        $pacienteApellido = $cita->obtenerApellidoPaciente($dataCita["id_paciente"]);
        $paciente = $pacienteNombre.' '.$pacienteApellido;
        $hora = $cita->obtenerNombreHora($dataCita["id_horario"]);
        ?>

        <tr>
        <td><?php echo $dataCita['id']?></td>
        <th><?php echo $dataCita["fecha"] ?></th>
        <th><?php echo $paciente ?></th>
        <td><?php echo $hora ?></td>
    
        <td><a href="?controller=Cita&&action=datosReprogramar&&id=<?php echo $dataCita['id'];?>" class="btn btn-primary btn-sm">Reprogramar</a></td>
        <td><a href="?controller=Cita&&action=cancelar&&id=<?php echo $dataCita['id'];?>" class="btn btn-danger btn-sm">Eliminar</a></td>
        </tr>
    
    <?php
    }
    ?>
    

        
    </tbody>
    </table>
    </div>
</div>
<?php require_once('Views/Layouts/footer.php');?>