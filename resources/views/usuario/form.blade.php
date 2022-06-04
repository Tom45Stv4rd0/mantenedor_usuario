

    <h1 class="bold"> {{$modo}} Empleado  </h1>
    <h2>Formulario de contacto</h2>

    <div class=" form-group">
        <label for="Nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{ isset($empleado->nombre)?$empleado->nombre:'' }}" id="nombre">
        
    </div>    
    <div class=" form-group">
        <label for="Correo">Correo</label>
        <input type="text" class="form-control" name="mail" value="{{ isset($empleado->mail)?$empleado->mail:'' }}" id="mail">
        
    </div>
    <div class=" form-group">
        <label for="Password">Password</label>
        <input type="text" class="form-control" name="password" value="{{ isset($empleado->password)?$empleado->password:'' }}" id="password">
        
    </div>
    <div class=" form-group">
        <label for="Rut">Rut</label>
        <input type="text" class="form-control" name="rut" value="{{ isset($empleado->rut)?$empleado->rut:'' }}" id="rut">
        
    </div>
    <div class=" form-group">
        <label for="Edad">Edad</label>
        <input type="text" class="form-control" name="edad" value="{{ isset($empleado->edad)?$empleado->edad:'' }}" id="edad">
        
    </div>
    <div class=" form-group">
        <label for="Cargo">Cargo</label>
        <input type="text" class="form-control" name="cargo" value="{{ isset($empleado->cargo)?$empleado->cargo:'' }}" id="cargo">
        
    </div>
    <div class=" form-group">
        <label for="Fecha">Fecha</label>
        <input type="date" class="form-control" name="fecha_ingreso" value="{{ isset($empleado->fecha_ingreso)?$empleado->fecha_ingreso:'' }}" id="fecha_ingreso">
        <br>
    </div>   

    <input class="btn btn-success" type="submit" value="{{$modo}} Datos">
    <a class="btn btn-primary" href="{{ url('usuario/create') }}">Regresar</a>