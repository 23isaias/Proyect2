<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<section id="A" style="border-radius: 35px 0px 0px 35px; width: 40%; height: 100%; text-align: center; color: #f0f8ff; float: right; background-color: blue; margin-top: 0%;">
    </p></p><h1> Registro de Usuario </p></p></h1>
    <p> ALGO CREATIVO AQUI</p>
</section> 

<section id="B" style=" width: 60%; height: 10%; text-align: center; float: left; text-overflow: inherit; margin-top: 2%;">
    <h2> Ingrese los datos para registarse a SIGMED </h2></p></p></h1>
</section> 

<form action="?controller=Register&&action=registrar" method="POST">
<section id="C" style="width: 60%; height: 45%; float: right; text-overflow: inherit;  margin-top: 0%;">
    <div style="padding: 0% 15% 10% 15%;"></p></p>
    <div class="cedu" style=" height:8%;" >
        <label for="IDdeUsuario" class="form-label">No° de Cédula/Pasaporte</label>
        <input type="text" class="form-control" id="cedula" name="cedula">  
    </div>
    <div class="nom" style=" height:8%;" >
        <label for="Nom" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">  
    </div>
    <div class="apel" style=" height:8%;" >
        <label for="Apel" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido">  
    </div>
    <div class="emai" style=" height:8%;" >
        <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="correo" name="correo">  
    </div>
    <div class="passwd" style=" height:8%;" >
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="contrasenna" name="contrasenna">
    </div><p></p>
    <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary" value="Registrarse">
</div>
</section>
</form>

<section id="D" style="width: 60%; height: 10%; text-align: center; float: right; text-overflow: inherit;">
<a href="?controller=Login&&action=index">¿Ya tiene cuenta? Inicie sesión </a>
<style>  {  text-align: center; text-decoration-line: underline; float: left; }    </style>
</section> 

