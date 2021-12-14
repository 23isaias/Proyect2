
<?php require_once('Views/Layouts/menuPaciente.php');?>

<div class="row" style=" height:100%">
    <div class="col-md-3 ml-sm-12 col-lg-3 col-xl-2 px-0" style="height:100%; background: #B9FFFF; ">
        <div style="display: table; width:100%;  height:8%;" >
            <div  style="display: table-cell; background: #033FAC; width:100%; height:100%; color: #ffffff; text-align:center; vertical-align:middle">
                <h2 >Agendar Cita</h2>
            </div>
        </div>
        <main role="main" class="col px-3">

        <form action="?controller=Cita&&action=agendar" method="POST" >

        <div class="mb-3" style="padding: 5% 0%">
            <label for="medico">Seleccione un medico:</label>
            <select class="form-select" name="medico" id="medico">
                <?php 
                foreach ($medicos as $medico){
                    echo ('<option value="'.$medico['id'].'">'.$medico['nombre'].' '.$medico['apellido'].'</option>');
                }
                ?>
            </select>
            <br>
            <label for="fecha">Seleccione una fecha:</label>
            <input type="date" name="fecha" id="fecha">
            <br><br>
            <label for="hora">Seleccione una hora:</label>
            <select class="form-select" name="hora" id="hora">
            <?php 
            foreach ($horas as $hora){
                echo ('<option value="'.$hora['id'].'">'.$hora['franja_horaria'].'</option>');
            }
            ?>
            </select>
            <input class="btn btn-primary" type="submit" value= "Agendar">
            </div>
        </form>
        </main>
    </div>
    <div class="col-md-9 col-lg-9 col-xl-10 px-0" style="height:100%; ">
    <img class="img-fluid rounded mx-auto d-block" src="imagen\css.png" alt="sigmed" style="height:100%">
    </div>
    <?php require_once('Views/Layouts/footer.php');?>
    
