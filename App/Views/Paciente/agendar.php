
<?php require_once('Views/Layouts/menuPaciente.php');?>

    <section id="a">
        <form action="?controller=Cita&&action=agendar" method="POST" >
            <label for="medico">Seleccione un medico:</label>
            <select name="medico" id="medico">
                <?php 
                foreach ($medicos as $medico){
                    echo ('<option value="'.$medico['id'].'">'.$medico['nombre'].' '.$medico['apellido'].'</option>');
                }
                ?>
            </select>
            <br>
            <label for="fecha">Seleccione una fecha:</label>
            <input type="date" name="fecha" id="fecha">
            <br>
            <select name="hora" id="hora">
            <?php 
            foreach ($horas as $hora){
                echo ('<option value="'.$hora['id'].'">'.$hora['franja_horaria'].'</option>');
            }
            ?>
            <input type="submit" value= "Agendar">
        </form>
    </section>
    <?php require_once('Views/Layouts/footer.php');?>
    
