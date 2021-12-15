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
<div style="height:90%; width:100%" >
    <div style="display: flex; justify-content:center; padding:2%" >
    <div class="card" style="width: 60%;">

  <div class="card-body">
    <h5 class="card-title">Agendar Cita</h5>
    <p class="card-text">Seleccione los detalles de su preferencia para agendar su cita</p>
  </div>
        <form action="?controller=Cita&&action=reprogramar&&id=<?php echo $id;?>" method="POST" >
            
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
            <input class="btn btn-primary" type="submit" value= "Reprogramar"></input>
            </div>
  </form>
</div>
</div>
</div>
    <?php require_once('Views/Layouts/footer.php');?>