@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content' )

<div id="event-create-container" class="col-sm-5 offset-sm-3" >
  <h1>Crie o seu evento</h1>
  <form action="/events" method="POST">
  @csrf
   <div  class="mb-3">
    <label for="title" class="form-label">Evento:</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="Nome do evento">
   </div>

   <div  class="mb-3">
    <label for="city" class="form-label">Cidade:</label>
    <input type="text" name="city" id="city" class="form-control" placeholder="Nome do evento">
   </div>

   <div   class="mb-3">
      <label for="private">O evento &eacute; privado?</label>
      <select name="private" id="private" class="form-control" >
        <option value="0">N&atilde;o</option>
        <option value="1">Sim</option>
      </select>
    </div>

   <div  class="mb-3">
    <label for="descriptions" class="form-label">Descri&ccedil;ao:</label>
    <textarea name="descriptions" id="descriptions" class="form-control" placeholder="Digite a descri&ccedil;&atilde;o do evento aqui!"></textarea>
   </div>

   <input type="submit" class="btn btn-primary" value="Criar Evento" class="mb-3">
  </form>
</div>


@endsection