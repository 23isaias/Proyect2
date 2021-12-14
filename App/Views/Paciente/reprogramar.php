<?php require_once('Views/Layouts/menuPaciente.php');?>

    <section id="a">
        <form action="?controller=Cita&&action=reprogramar&&id=<?php echo $id;?>" method="POST" >
            
            <br>
            <label for="fecha">Seleccione una fecha:</label>
            <input type="date" name="fecha" id="fecha">
            <br>
            <label for="hora">Seleccione una hora:</label>
            <select name="hora" id="hora">
            <?php 
            foreach ($horas as $hora){
                echo ('<option value="'.$hora['id'].'">'.$hora['franja_horaria'].'</option>');
            }
            ?>
            <input type="submit" value= "Reprogramar"></input>
        </form>
    </section>
    <?php require_once('Views/Layouts/footer.php');?>