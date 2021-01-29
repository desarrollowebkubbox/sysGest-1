@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="container d-none"  id="addNewTask">
    <div class=" row flex-column justify-content-center">
      <h1 class="text-center">Crear nueva tarea</h1>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="email" class="form-control" id="nameCreate" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripción</label>
    <textarea class="form-control" id="descriptionCreate" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Estado</label>
    <select class="form-control" id="stateCreate">
      <option>INICIADA</option>
      <option>EN PROCESO</option>
      <option>CANCELADA</option>
      <option>COMPLETADA</option>
    </select>
  </div>
  <div class="d-flex justify-content-around">
  <button class="col btn btn-info text-white" id="goBackTask" style="max-width:40%;">Volver tareas</button>
  <button class="col btn btn-success" style="max-width:40%;" id="registerTask">Registrar tarea</button>
</div>
</div>
</div>
    @if($tareas->isEmpty())
    <div class="d-flex flex-column justify-content-center" id="taskNone">
        <h3 class="font-weight-bold">Vaya, parece que no tienes tareas registradas. </h3>
        <button class="btn btn-success btn-lg" id="registerFirstTask">Registrar tarea</button>
    </div>
    @else
     
</div>
</div>
<div id="tasks" class="d-flex justify-content-center d-none">
     @foreach ($tareas as $tarea)
    <div class="card col-lg-8 mt-5">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $tarea->name }}</h5>
        <p class="card-text">{{ $tarea->description }}</p>
        <p class="card-text"><small class="text-muted">{{ $tarea->state }}</small></p>
        <button class="btn btn-info text-white">EDITAR</button>
        <button class="btn btn-danger deleteTaskClass" task-id="{{$tarea->id}}">ELIMINAR</button>
      </div>
    </div>
  </div>
</div>
@endforeach
</div>
    @endif
    </div>
</div>
@endsection
