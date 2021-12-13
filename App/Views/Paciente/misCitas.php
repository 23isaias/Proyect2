<header>
		<?php require_once('Views/Layouts/menu.php'); ?>
</header>

<div style="display: table; width:100%;  height:15%;" >
            <div  style="display: table-cell; background: #fff; width:100%; height:100%; color: #ffffff; text-align:center; vertical-align:middle">

<div class="row" style="color:#000000">
    <div class="col">
    <h1>Mis Citas</h1>
    </div>
    <div class="col">
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
        <th >Médico</th>
        <th >Hora</th>
        <th ></th>
        <th ></th>
        </tr>
    </thead>
    <tbody>
    <form action="escribir aqui" method="post">
    <?php 
    foreach($dataCitas as $dataCita){
        echo "hola";
        $medicoNombre = $cita->obtenerNombreMedico($dataCita["id_medico"]);
        $medicoApellido = $cita->obtenerApellidoMedico($dataCita["id_medico"]);
        $medico = $medicoNombre.' '.$medicoApellido;
        $hora = $cita->obtenerNombreHora($dataCita["id_horario"]);
        echo('
        <tr>
        <td> <input type="text"  name="id" id="df"  readonly value="'.$dataCita['id'].'"></td>
        <th>'.$dataCita["fecha"].'</th>
        <th>'.$medico.'</th>
        <td>'.$hora.'</td>
    
        <td><button type="button" class="btn btn-primary btn-sm">Reprogramar</button></td>
        <td><button type="button" class="btn btn-danger btn-sm">Eliminar</button></td>
        </tr>
    
    ');
    }
    ?>
    </form>
        
    </tbody>
    </table>
</div>
