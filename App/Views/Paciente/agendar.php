
<?php require_once('Views/Layouts/menuPaciente.php');?>
<style>body{background:#B9FFFF;}</style>
<div style="height:90%; width:100%" >
    <div style="display: flex; justify-content:center; padding:5%" >
    <div class="card" style="width: 60%; min-width: 375px;">

  <div class="card-body">
    <h5 class="card-title"><div style="display: flex; justify-content:center;">Agendar Cita</div></h5>
    <p class="card-text">Seleccione los detalles de su preferencia para agendar su cita</p>
  </div>

        <form action="?controller=Cita&&action=agendar" method="POST" >

        <form action="?controller=Cita&&action=agendar" method="POST" >
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <label for="medico">Seleccione un medico:</label>
        <select class="form-select" name="medico" id="medico">
                <?php 
                foreach ($medicos as $medico){
                    echo ('<option value="'.$medico['id'].'">'.$medico['nombre'].' '.$medico['apellido'].'</option>');
                }
                ?>
            </select>
            </li>
    <li class="list-group-item">
    <label for="fecha">Seleccione una fecha:</label><br>
        <input type="date" name="fecha" id="fecha">
        </li>
    <li class="list-group-item">
    <label for="hora">Seleccione una hora:</label>
        <select class="form-select" name="hora" id="hora">
            <?php 
            foreach ($horas as $hora){
                echo ('<option value="'.$hora['id'].'">'.$hora['franja_horaria'].'</option>');
            }
            ?>
            </select>
            </li>
  </ul>
  <div class="card-body">
  <div style="display: flex; justify-content:center;">
  <input class="btn btn-primary" type="submit" value= "Agendar">
  </div>
        </div>
</div>
</div>
</div>
    <?php require_once('Views/Layouts/footer.php');?>
    
