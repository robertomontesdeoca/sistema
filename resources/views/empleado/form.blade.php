<h1> {{ $modo }} empleado </h1>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>



@endif

<div class="form-goup">
<label for="Nombre"> Nombre </label>
<input type="text" class="form-contol" name="Nombre" 
 value="{{isset($empleado->Nombre)? $empleado->Nombre:old('Nombre')}}" id="Nombre"> 

</div>

<div class="form-goup">
<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" class="form-contol" name="ApellidoPaterno"
 value="{{isset($empleado->ApellidoPaterno)? $empleado->ApellidoPaterno:old('ApellidoPaterno')}}"id="ApellidoPaterno">

</div>

<div class="form-goup">
<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" class="form-contol" name="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)? $empleado->ApellidoMaterno:old('ApellidoMaterno')}}" id="ApellidoMaterno">


</div>

<div class="form-goup">
<label for="Correo"> Correo </label>
<input type="text" class="form-contol" name="Correo" value="{{isset($empleado->Correo)? $empleado->Correo:old('Correo')}}" id="Correo >

</div>

<div class="form-goup">
<label for="Foto"> Foto </label>
@if(isset($empleado->Foto))

 <img class="img-thumbnailvimg-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
@endif

<input type="file" class="form-contol" name="Foto" value="" id="Foto">
</div>

<input class="btn btn-success" type="submit" value="{{$modo}} datos" >

<a class="btn btn-primary"  href="{{url('empleado/')}}"> Regresar </a>

